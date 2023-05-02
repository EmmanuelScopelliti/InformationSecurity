<?php

namespace Symfony\Config\Shopware\Cache;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class InvalidationConfig 
{
    private $delay;
    private $count;
    private $httpCache;
    private $productListingRoute;
    private $productDetailRoute;
    private $productSearchRoute;
    private $productSuggestRoute;
    private $productCrossSellingRoute;
    private $paymentMethodRoute;
    private $shippingMethodRoute;
    private $navigationRoute;
    private $categoryRoute;
    private $landingPageRoute;
    private $languageRoute;
    private $currencyRoute;
    private $countryRoute;
    private $countryStateRoute;
    private $salutationRoute;
    private $productReviewRoute;
    private $sitemapRoute;
    private $_usedProperties = [];

    /**
     * @default 0
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function delay($value): self
    {
        $this->_usedProperties['delay'] = true;
        $this->delay = $value;

        return $this;
    }

    /**
     * @default 150
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function count($value): self
    {
        $this->_usedProperties['count'] = true;
        $this->count = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function httpCache($value): self
    {
        $this->_usedProperties['httpCache'] = true;
        $this->httpCache = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function productListingRoute($value): self
    {
        $this->_usedProperties['productListingRoute'] = true;
        $this->productListingRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function productDetailRoute($value): self
    {
        $this->_usedProperties['productDetailRoute'] = true;
        $this->productDetailRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function productSearchRoute($value): self
    {
        $this->_usedProperties['productSearchRoute'] = true;
        $this->productSearchRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function productSuggestRoute($value): self
    {
        $this->_usedProperties['productSuggestRoute'] = true;
        $this->productSuggestRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function productCrossSellingRoute($value): self
    {
        $this->_usedProperties['productCrossSellingRoute'] = true;
        $this->productCrossSellingRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function paymentMethodRoute($value): self
    {
        $this->_usedProperties['paymentMethodRoute'] = true;
        $this->paymentMethodRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function shippingMethodRoute($value): self
    {
        $this->_usedProperties['shippingMethodRoute'] = true;
        $this->shippingMethodRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function navigationRoute($value): self
    {
        $this->_usedProperties['navigationRoute'] = true;
        $this->navigationRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function categoryRoute($value): self
    {
        $this->_usedProperties['categoryRoute'] = true;
        $this->categoryRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function landingPageRoute($value): self
    {
        $this->_usedProperties['landingPageRoute'] = true;
        $this->landingPageRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function languageRoute($value): self
    {
        $this->_usedProperties['languageRoute'] = true;
        $this->languageRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function currencyRoute($value): self
    {
        $this->_usedProperties['currencyRoute'] = true;
        $this->currencyRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function countryRoute($value): self
    {
        $this->_usedProperties['countryRoute'] = true;
        $this->countryRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function countryStateRoute($value): self
    {
        $this->_usedProperties['countryStateRoute'] = true;
        $this->countryStateRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function salutationRoute($value): self
    {
        $this->_usedProperties['salutationRoute'] = true;
        $this->salutationRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function productReviewRoute($value): self
    {
        $this->_usedProperties['productReviewRoute'] = true;
        $this->productReviewRoute = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function sitemapRoute($value): self
    {
        $this->_usedProperties['sitemapRoute'] = true;
        $this->sitemapRoute = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('delay', $value)) {
            $this->_usedProperties['delay'] = true;
            $this->delay = $value['delay'];
            unset($value['delay']);
        }

        if (array_key_exists('count', $value)) {
            $this->_usedProperties['count'] = true;
            $this->count = $value['count'];
            unset($value['count']);
        }

        if (array_key_exists('http_cache', $value)) {
            $this->_usedProperties['httpCache'] = true;
            $this->httpCache = $value['http_cache'];
            unset($value['http_cache']);
        }

        if (array_key_exists('product_listing_route', $value)) {
            $this->_usedProperties['productListingRoute'] = true;
            $this->productListingRoute = $value['product_listing_route'];
            unset($value['product_listing_route']);
        }

        if (array_key_exists('product_detail_route', $value)) {
            $this->_usedProperties['productDetailRoute'] = true;
            $this->productDetailRoute = $value['product_detail_route'];
            unset($value['product_detail_route']);
        }

        if (array_key_exists('product_search_route', $value)) {
            $this->_usedProperties['productSearchRoute'] = true;
            $this->productSearchRoute = $value['product_search_route'];
            unset($value['product_search_route']);
        }

        if (array_key_exists('product_suggest_route', $value)) {
            $this->_usedProperties['productSuggestRoute'] = true;
            $this->productSuggestRoute = $value['product_suggest_route'];
            unset($value['product_suggest_route']);
        }

        if (array_key_exists('product_cross_selling_route', $value)) {
            $this->_usedProperties['productCrossSellingRoute'] = true;
            $this->productCrossSellingRoute = $value['product_cross_selling_route'];
            unset($value['product_cross_selling_route']);
        }

        if (array_key_exists('payment_method_route', $value)) {
            $this->_usedProperties['paymentMethodRoute'] = true;
            $this->paymentMethodRoute = $value['payment_method_route'];
            unset($value['payment_method_route']);
        }

        if (array_key_exists('shipping_method_route', $value)) {
            $this->_usedProperties['shippingMethodRoute'] = true;
            $this->shippingMethodRoute = $value['shipping_method_route'];
            unset($value['shipping_method_route']);
        }

        if (array_key_exists('navigation_route', $value)) {
            $this->_usedProperties['navigationRoute'] = true;
            $this->navigationRoute = $value['navigation_route'];
            unset($value['navigation_route']);
        }

        if (array_key_exists('category_route', $value)) {
            $this->_usedProperties['categoryRoute'] = true;
            $this->categoryRoute = $value['category_route'];
            unset($value['category_route']);
        }

        if (array_key_exists('landing_page_route', $value)) {
            $this->_usedProperties['landingPageRoute'] = true;
            $this->landingPageRoute = $value['landing_page_route'];
            unset($value['landing_page_route']);
        }

        if (array_key_exists('language_route', $value)) {
            $this->_usedProperties['languageRoute'] = true;
            $this->languageRoute = $value['language_route'];
            unset($value['language_route']);
        }

        if (array_key_exists('currency_route', $value)) {
            $this->_usedProperties['currencyRoute'] = true;
            $this->currencyRoute = $value['currency_route'];
            unset($value['currency_route']);
        }

        if (array_key_exists('country_route', $value)) {
            $this->_usedProperties['countryRoute'] = true;
            $this->countryRoute = $value['country_route'];
            unset($value['country_route']);
        }

        if (array_key_exists('country_state_route', $value)) {
            $this->_usedProperties['countryStateRoute'] = true;
            $this->countryStateRoute = $value['country_state_route'];
            unset($value['country_state_route']);
        }

        if (array_key_exists('salutation_route', $value)) {
            $this->_usedProperties['salutationRoute'] = true;
            $this->salutationRoute = $value['salutation_route'];
            unset($value['salutation_route']);
        }

        if (array_key_exists('product_review_route', $value)) {
            $this->_usedProperties['productReviewRoute'] = true;
            $this->productReviewRoute = $value['product_review_route'];
            unset($value['product_review_route']);
        }

        if (array_key_exists('sitemap_route', $value)) {
            $this->_usedProperties['sitemapRoute'] = true;
            $this->sitemapRoute = $value['sitemap_route'];
            unset($value['sitemap_route']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['delay'])) {
            $output['delay'] = $this->delay;
        }
        if (isset($this->_usedProperties['count'])) {
            $output['count'] = $this->count;
        }
        if (isset($this->_usedProperties['httpCache'])) {
            $output['http_cache'] = $this->httpCache;
        }
        if (isset($this->_usedProperties['productListingRoute'])) {
            $output['product_listing_route'] = $this->productListingRoute;
        }
        if (isset($this->_usedProperties['productDetailRoute'])) {
            $output['product_detail_route'] = $this->productDetailRoute;
        }
        if (isset($this->_usedProperties['productSearchRoute'])) {
            $output['product_search_route'] = $this->productSearchRoute;
        }
        if (isset($this->_usedProperties['productSuggestRoute'])) {
            $output['product_suggest_route'] = $this->productSuggestRoute;
        }
        if (isset($this->_usedProperties['productCrossSellingRoute'])) {
            $output['product_cross_selling_route'] = $this->productCrossSellingRoute;
        }
        if (isset($this->_usedProperties['paymentMethodRoute'])) {
            $output['payment_method_route'] = $this->paymentMethodRoute;
        }
        if (isset($this->_usedProperties['shippingMethodRoute'])) {
            $output['shipping_method_route'] = $this->shippingMethodRoute;
        }
        if (isset($this->_usedProperties['navigationRoute'])) {
            $output['navigation_route'] = $this->navigationRoute;
        }
        if (isset($this->_usedProperties['categoryRoute'])) {
            $output['category_route'] = $this->categoryRoute;
        }
        if (isset($this->_usedProperties['landingPageRoute'])) {
            $output['landing_page_route'] = $this->landingPageRoute;
        }
        if (isset($this->_usedProperties['languageRoute'])) {
            $output['language_route'] = $this->languageRoute;
        }
        if (isset($this->_usedProperties['currencyRoute'])) {
            $output['currency_route'] = $this->currencyRoute;
        }
        if (isset($this->_usedProperties['countryRoute'])) {
            $output['country_route'] = $this->countryRoute;
        }
        if (isset($this->_usedProperties['countryStateRoute'])) {
            $output['country_state_route'] = $this->countryStateRoute;
        }
        if (isset($this->_usedProperties['salutationRoute'])) {
            $output['salutation_route'] = $this->salutationRoute;
        }
        if (isset($this->_usedProperties['productReviewRoute'])) {
            $output['product_review_route'] = $this->productReviewRoute;
        }
        if (isset($this->_usedProperties['sitemapRoute'])) {
            $output['sitemap_route'] = $this->sitemapRoute;
        }

        return $output;
    }

}
