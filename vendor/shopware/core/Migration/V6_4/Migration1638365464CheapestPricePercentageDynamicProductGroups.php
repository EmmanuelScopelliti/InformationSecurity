<?php declare(strict_types=1);

namespace Shopware\Core\Migration\V6_4;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Log\Package;
use Shopware\Core\Framework\Migration\MigrationStep;

/**
 * @deprecated tag:v6.5.0 - reason:becomes-internal - Migrations will be internal in v6.5.0
 */
#[Package('core')]
class Migration1638365464CheapestPricePercentageDynamicProductGroups extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1638365464;
    }

    public function update(Connection $connection): void
    {
        $connection->executeStatement('UPDATE product_stream_filter SET field = "cheapestPrice.percentage" WHERE field = "price.percentage"');
    }

    public function updateDestructive(Connection $connection): void
    {
    }
}
