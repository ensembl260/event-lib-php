<?php

namespace Ensembl260\Event;

use Greg0ire\Enum\AbstractEnum;

final class EventType extends AbstractEnum
{
    // Doctrine Events
    public const CREATED = 'created';
    public const UPDATED = 'updated';
    public const DELETED = 'deleted';
}
