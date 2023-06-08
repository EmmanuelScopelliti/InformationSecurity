<?php declare(strict_types=1);

namespace Chat\Core\Content\Chat;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\System\User\UserDefinition;

class ChatDefinition extends EntityDefinition
{

    const ENTITY_NAME = 'chat_entry';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getCollectionClass(): string
    {
        return ChatCollection::class;
    }

    public function getEntityClass(): string
    {
        return ChatEntity::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('chat_id', 'chatId'))->addFlags(new PrimaryKey()),
            (new FkField('user_id', 'userId', UserDefinition::class))->addFlags(new PrimaryKey()),
            (new StringField('token', 'token'))->addFlags(new Required()),
        ]);
    }
}