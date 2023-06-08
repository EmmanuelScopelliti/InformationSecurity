<?php declare(strict_types=1);

namespace Chat\Migration;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Exception;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1686262796ChatRepo extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1686262796;
    }

    /**
     * @throws Exception
     */
    public function update(Connection $connection): void
    {
        $query = <<<SQL
        CREATE TABLE IF NOT EXISTS `chat_entry` (
            `chat_id`    INT             NOT NULL AUTO_INCREMENT,
            `user_id`    BINARY(16)      NOT NULL,
            `token`      VARCHAR(255)    NOT NULL,
            `created_at` DATE                NULL,
            `updated_at` DATE                NULL,
            PRIMARY KEY (chat_id),
            FOREIGN KEY (user_id) REFERENCES customer(id)
        )
            ENGINE = InnoDB
            DEFAULT CHARSET = utf8mb4
            COLLATE = utf8mb4_unicode_ci;
        SQL;

        $connection->executeStatement($query);
    }

    /**
     * @throws Exception
     */
    public function updateDestructive(Connection $connection): void
    {
        $query = <<<SQL
        DROP DATABASE IF EXISTS chat_entry;
        CREATE TABLE IF NOT EXISTS `chat_entry` (
            `chat_id`    INT             NOT NULL AUTO_INCREMENT,
            `user_id`    BINARY(16)      NOT NULL,
            `token`      VARCHAR(255)    NOT NULL,
            `created_at` DATE                NULL,
            `updated_at` DATE                NULL,
            PRIMARY KEY (chat_id),
            FOREIGN KEY (user_id) REFERENCES customer(id)
        )
            ENGINE = InnoDB
            DEFAULT CHARSET = utf8mb4
            COLLATE = utf8mb4_unicode_ci;
        SQL;

        $connection->executeStatement($query);
    }
}
