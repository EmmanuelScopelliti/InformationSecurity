<?php declare(strict_types=1);

namespace zenit\PlatformStratus\Core\Content\Media\Cms\Type;

use Shopware\Core\Content\Cms\Aggregate\CmsSlot\CmsSlotEntity;
use Shopware\Core\Content\Cms\DataResolver\CriteriaCollection;
use Shopware\Core\Content\Cms\DataResolver\Element\AbstractCmsElementResolver;
use Shopware\Core\Content\Cms\DataResolver\Element\ElementDataCollection;
use Shopware\Core\Content\Cms\DataResolver\ResolverContext\EntityResolverContext;
use Shopware\Core\Content\Cms\DataResolver\ResolverContext\ResolverContext;
use zenit\PlatformStratus\Core\Content\Cms\SalesChannel\Struct\ZenImageSliderItemStruct;
use zenit\PlatformStratus\Core\Content\Cms\SalesChannel\Struct\ZenImageSliderStruct;
use Shopware\Core\Content\Media\Cms\AbstractDefaultMediaResolver;
use Shopware\Core\Content\Media\MediaDefinition;
use Shopware\Core\Content\Media\MediaEntity;
use Shopware\Core\Content\Product\Aggregate\ProductMedia\ProductMediaCollection;
use Shopware\Core\Content\Product\Aggregate\ProductMedia\ProductMediaEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;

class ImageSliderTypeDataResolver extends AbstractCmsElementResolver
{

    private AbstractDefaultMediaResolver $mediaResolver;

    public function __construct(AbstractDefaultMediaResolver $mediaResolver) {
        $this->mediaResolver = $mediaResolver;
    }

    public function getType(): string
    {
        return 'zen-image-slider';
    }

    public function collect(CmsSlotEntity $slot, ResolverContext $resolverContext): ?CriteriaCollection
    {
        $sliderItemsConfig = $slot->getFieldConfig()->get('sliderItems');
        if ($sliderItemsConfig === null || $sliderItemsConfig->isMapped() || $sliderItemsConfig->isDefault()) {
            return null;
        }

        $sliderItems = $sliderItemsConfig->getArrayValue();
        $mediaIds = array_column($sliderItems, 'mediaId');

        $criteria = new Criteria($mediaIds);

        $criteriaCollection = new CriteriaCollection();
        $criteriaCollection->add('media_' . $slot->getUniqueIdentifier(), MediaDefinition::class, $criteria);

        return $criteriaCollection;
    }

    public function enrich(CmsSlotEntity $slot, ResolverContext $resolverContext, ElementDataCollection $result): void
    {
        $config = $slot->getFieldConfig();
        $imageSlider = new ZenImageSliderStruct();
        $slot->setData($imageSlider);

        $navigation = $config->get('navigation');
        if ($navigation !== null && $navigation->isStatic()) {
            $imageSlider->setNavigation($navigation->getArrayValue());
        }

        $sliderItemsConfig = $config->get('sliderItems');
        if ($sliderItemsConfig === null) {
            return;
        }

        if ($sliderItemsConfig->isStatic()) {
            foreach ($sliderItemsConfig->getArrayValue() as $sliderItem) {
                $this->addMedia($slot, $imageSlider, $result, $sliderItem);
            }
        }

        if ($sliderItemsConfig->isDefault()) {
            foreach ($sliderItemsConfig->getArrayValue() as $sliderItem) {
                $this->addDefaultMediaToImageSlider($imageSlider, $sliderItem);
            }
        }

        if ($sliderItemsConfig->isMapped() && $resolverContext instanceof EntityResolverContext) {
            $sliderItems = $this->resolveEntityValue($resolverContext->getEntity(), $sliderItemsConfig->getStringValue());

            if ($sliderItems === null || \count($sliderItems) < 1) {
                return;
            }
            $this->sortItemsByPosition($sliderItems);

            foreach ($sliderItems->getMedia() as $media) {
                $imageSliderItem = new ZenImageSliderItemStruct();
                $imageSliderItem->setMedia($media);
                $imageSlider->addSliderItem($imageSliderItem);
            }
        }
    }

    protected function sortItemsByPosition(ProductMediaCollection $sliderItems): void
    {
        if (!$sliderItems->first() || !$sliderItems->first()->has('position')) {
            return;
        }

        $sliderItems->sort(static function (ProductMediaEntity $a, ProductMediaEntity $b) {
            return $a->get('position') - $b->get('position');
        });
    }

    private function addMedia(CmsSlotEntity $slot, ZenImageSliderStruct $imageSlider, ElementDataCollection $result, array $config): void
    {
        $imageSliderItem = new ZenImageSliderItemStruct();

        if (!empty($config['url'])) {
            $imageSliderItem->setUrl($config['url']);
            $imageSliderItem->setNewTab($config['newTab']);
        }

        if (!empty($config['imageBorderRadius'])) {
            $imageSliderItem->setImageBorderRadius($config['imageBorderRadius']);
            $imageSliderItem->setImageBorderRadiusTopLeft($config['imageBorderRadiusTopLeft']);
            $imageSliderItem->setImageBorderRadiusTopRight($config['imageBorderRadiusTopRight']);
            $imageSliderItem->setImageBorderRadiusBottomLeft($config['imageBorderRadiusBottomLeft']);
            $imageSliderItem->setImageBorderRadiusBottomRight($config['imageBorderRadiusBottomRight']);
        }

        $imageSliderItem->setText($config['text']);
        $imageSliderItem->setColor($config['color']);
        $imageSliderItem->setBackgroundColor($config['backgroundColor']);
        $imageSliderItem->setTextBorderRadius($config['textBorderRadius']);
        $imageSliderItem->setTextBorderRadiusTopLeft($config['textBorderRadiusTopLeft']);
        $imageSliderItem->setTextBorderRadiusTopRight($config['textBorderRadiusTopRight']);
        $imageSliderItem->setTextBorderRadiusBottomRight($config['textBorderRadiusBottomRight']);
        $imageSliderItem->setTextBorderRadiusBottomLeft($config['textBorderRadiusBottomLeft']);
        $imageSliderItem->setTextPaddings($config['textPaddings']);
        $imageSliderItem->setTextPaddingTop($config['textPaddingTop']);
        $imageSliderItem->setTextPaddingRight($config['textPaddingRight']);
        $imageSliderItem->setTextPaddingBottom($config['textPaddingBottom']);
        $imageSliderItem->setTextPaddingLeft($config['textPaddingLeft']);
        $imageSliderItem->setTextMargins($config['textMargins']);
        $imageSliderItem->setTextMarginTop($config['textMarginTop']);
        $imageSliderItem->setTextMarginRight($config['textMarginRight']);
        $imageSliderItem->setTextMarginBottom($config['textMarginBottom']);
        $imageSliderItem->setTextMarginLeft($config['textMarginLeft']);
        $imageSliderItem->setVerticalTextAlign($config['verticalTextAlign']);
        $imageSliderItem->setHorizontalTextAlign($config['horizontalTextAlign']);
        $imageSliderItem->setTextMinWidth($config['textMinWidth']);
        $imageSliderItem->setTextMaxWidth($config['textMaxWidth']);
        $imageSliderItem->setOverlay($config['overlay']);
        $imageSliderItem->setOverlayColor($config['overlayColor']);
        $imageSliderItem->setOverlayOpacity($config['overlayOpacity']);
        $imageSliderItem->setAnimationIn($config['animationIn']);
        $imageSliderItem->setAnimation($config['animation']);
        $imageSliderItem->setCustomItemClasses($config['customItemClasses']);

        $searchResult = $result->get('media_' . $slot->getUniqueIdentifier());
        if (!$searchResult) {
            return;
        }

        /** @var MediaEntity|null $media */
        $media = $searchResult->get($config['mediaId']);
        if (!$media) {
            return;
        }

        $imageSliderItem->setMedia($media);
        $imageSlider->addSliderItem($imageSliderItem);
    }

    private function addDefaultMediaToImageSlider(ZenImageSliderStruct $imageSlider, array $config): void
    {
        $media = $this->mediaResolver->getDefaultCmsMediaEntity($config['fileName']);

        if ($media === null) {
            return;
        }

        $imageSliderItem = new ZenImageSliderItemStruct();

        if (!empty($config['imageBorderRadius'])) {
            $imageSliderItem->setImageBorderRadius($config['imageBorderRadius']);
            $imageSliderItem->setImageBorderRadiusTopLeft($config['imageBorderRadiusTopLeft']);
            $imageSliderItem->setImageBorderRadiusTopRight($config['imageBorderRadiusTopRight']);
            $imageSliderItem->setImageBorderRadiusBottomLeft($config['imageBorderRadiusBottomLeft']);
            $imageSliderItem->setImageBorderRadiusBottomRight($config['imageBorderRadiusBottomRight']);
        }

        $imageSliderItem->setText($config['text']);
        $imageSliderItem->setColor($config['color']);
        $imageSliderItem->setBackgroundColor($config['backgroundColor']);
        $imageSliderItem->setTextBorderRadius($config['textBorderRadius']);
        $imageSliderItem->setTextBorderRadiusTopLeft($config['textBorderRadiusTopLeft']);
        $imageSliderItem->setTextBorderRadiusTopRight($config['textBorderRadiusTopRight']);
        $imageSliderItem->setTextBorderRadiusBottomRight($config['textBorderRadiusBottomRight']);
        $imageSliderItem->setTextBorderRadiusBottomLeft($config['textBorderRadiusBottomLeft']);
        $imageSliderItem->setTextPaddings($config['textPaddings']);
        $imageSliderItem->setTextPaddingTop($config['textPaddingTop']);
        $imageSliderItem->setTextPaddingRight($config['textPaddingRight']);
        $imageSliderItem->setTextPaddingBottom($config['textPaddingBottom']);
        $imageSliderItem->setTextPaddingLeft($config['textPaddingLeft']);
        $imageSliderItem->setTextMargins($config['textMargins']);
        $imageSliderItem->setTextMarginTop($config['textMarginTop']);
        $imageSliderItem->setTextMarginRight($config['textMarginRight']);
        $imageSliderItem->setTextMarginBottom($config['textMarginBottom']);
        $imageSliderItem->setTextMarginLeft($config['textMarginLeft']);
        $imageSliderItem->setVerticalTextAlign($config['verticalTextAlign']);
        $imageSliderItem->setHorizontalTextAlign($config['horizontalTextAlign']);
        $imageSliderItem->setTextMinWidth($config['textMinWidth']);
        $imageSliderItem->setTextMaxWidth($config['textMaxWidth']);
        $imageSliderItem->setOverlay($config['overlay']);
        $imageSliderItem->setOverlayColor($config['overlayColor']);
        $imageSliderItem->setOverlayOpacity($config['overlayOpacity']);
        $imageSliderItem->setAnimationIn($config['animationIn']);
        $imageSliderItem->setAnimation($config['animation']);
        $imageSliderItem->setCustomItemClasses($config['customItemClasses']);

        $imageSliderItem->setMedia($media);
        $imageSlider->addSliderItem($imageSliderItem);
    }
}
