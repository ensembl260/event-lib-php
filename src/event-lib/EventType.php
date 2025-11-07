<?php

namespace Ensembl260\Event;

enum EventType: string
{
    // Doctrine Events
    public const CREATED = 'created';
    public const UPDATED = 'updated';
    public const DELETED = 'deleted';
}
