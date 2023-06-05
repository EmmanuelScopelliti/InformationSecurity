<?php declare(strict_types=1);

namespace zenit\PlatformStratus\Framework\Cookie;

use Shopware\Storefront\Framework\Cookie\CookieProviderInterface;
use Shopware\Core\System\SystemConfig\SystemConfigService;

class CustomCookieProvider implements CookieProviderInterface {

    private CookieProviderInterface $originalService;
    private SystemConfigService $systemConfigService;

    public function __construct(SystemConfigService $systemConfigService, CookieProviderInterface $service)
    {
        $this->systemConfigService = $systemConfigService;
        $this->originalService = $service;
    }

    private const singleCookie = [
        'snippet_name' => 'zentheme.cookie.googleFonts.name',
        'snippet_description' => 'zentheme.cookie.googleFonts.description',
        'cookie' => 'zen_google_fonts',
        'value' => '1',
        'expiration' => '365'
    ];

    public function getCookieGroups(): array
    {
        if (!$this->systemConfigService->get('zenitPlatformStratus.config.googleFontsCookie')){
            return $this->originalService->getCookieGroups();
        }

        $cookies = $this->originalService->getCookieGroups();
        foreach ($cookies as &$cookie) {
            if (!\is_array($cookie)) {
                continue;
            }

            if (!$this->isComfortFeaturesGroup($cookie)) {
                continue;
            }

            if (!\array_key_exists('entries', $cookie)) {
                continue;
            }

            $cookie['entries'][] = array_merge (
                self::singleCookie
            );
        }

        return $cookies;
    }

    private function isComfortFeaturesGroup(array $cookie): bool
    {
        return (\array_key_exists('snippet_name', $cookie) && $cookie['snippet_name'] === 'cookie.groupComfortFeatures');
    }
}