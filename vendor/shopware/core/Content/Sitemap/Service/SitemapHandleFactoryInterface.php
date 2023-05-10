<?php declare(strict_types=1);

namespace Shopware\Core\Content\Sitemap\Service;

use League\Flysystem\FilesystemInterface;
use Shopware\Core\Framework\Log\Package;
use Shopware\Core\System\SalesChannel\SalesChannelContext;

#[Package('sales-channel')]
interface SitemapHandleFactoryInterface
{
    public function create(FilesystemInterface $filesystem, SalesChannelContext $context, ?string $domain = null): SitemapHandleInterface;
}
