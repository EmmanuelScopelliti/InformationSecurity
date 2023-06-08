<?php declare(strict_types=1);

namespace Chat\Core\Content\Chat;


use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

class ChatCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ChatEntity::class;
    }
}