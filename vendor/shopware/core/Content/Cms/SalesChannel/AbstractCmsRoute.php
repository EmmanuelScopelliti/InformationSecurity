<?php declare(strict_types=1);

namespace Shopware\Core\Content\Cms\SalesChannel;

use Shopware\Core\Framework\Log\Package;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Component\HttpFoundation\Request;

#[Package('content')]
abstract class AbstractCmsRoute
{
    abstract public function getDecorated(): AbstractCmsRoute;

    abstract public function load(string $id, Request $request, SalesChannelContext $context): CmsRouteResponse;
}
