<?php declare(strict_types=1);

namespace zenit\PlatformStratus\Storefront\Controller;

use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Shopware\Core\Content\Product\Exception\ProductNotFoundException;
use Shopware\Core\Framework\Routing\Exception\MissingRequestParameterException;
use Shopware\Storefront\Page\Product\Configurator\ProductCombinationFinder;
use Shopware\Storefront\Page\Product\QuickView\MinimalQuickViewPageLoader;

/**
 * @Route(defaults={"_routeScope"={"storefront"}})
 */
class QuickViewController extends StorefrontController
{

    /**
     * @var ProductCombinationFinder
     */
    private $productCombinationFinder;

    /**
     * @var MinimalQuickViewPageLoader
     */
    private $minimalQuickViewPageLoader;

    public function __construct(
        MinimalQuickViewPageLoader $minimalQuickViewPageLoader,
        ProductCombinationFinder $productCombinationFinder
    ) {
        $this->minimalQuickViewPageLoader = $minimalQuickViewPageLoader;
        $this->productCombinationFinder = $productCombinationFinder;
    }

    /**
     * @Route("/zenit/PlatformStratus/quickview/variant/{productId}", name="widgets.zenit.PlatformStratus.quickview.variant", options={"seo"="false"}, methods={"GET"}, defaults={"productId"=null, "XmlHttpRequest"=true})
     *
     * @throws MissingRequestParameterException
     * @throws ProductNotFoundException
     */
    public function quickviewVariant(SalesChannelContext $context, Request $request, string $productId): Response
    {
        if (!$productId) {
            throw new MissingRequestParameterException('productId', '/productId');
        }

        $switchedOption = (string) $request->query->get('switched');

        $options = (string) $request->query->get('options');
        $newOptions = \json_decode($options, true);

        $combination = $this->productCombinationFinder->find($productId, $switchedOption, $newOptions, $context);
        $variantId = $combination->getVariantId();

        $request->attributes->set('productId', $variantId);
        $page = $this->minimalQuickViewPageLoader->load($request, $context);

        return $this->renderStorefront('@Storefront/storefront/component/product/quickview/minimal.html.twig', [
            'page' => $page
        ]);
    }
}