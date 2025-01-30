<?php

namespace Ensembl260\Event;

class EventException extends \Exception
{
    public static function invalidEventType(string $type): self
    {
        return new self("The given event type '$type' is invalid and not defined in Ensembl260\Event\EventType");
    }

    public static function invalidIdFormat($id): self
    {
        $type = get_debug_type($id);

        return new self("The given id is a '$type' instead of a string or an array.");
    }

    public static function errorDuringUnserialization(string $error): self
    {
        return new self("An error occur during the unserialization of a Ensembl260\Event\EventMessage with the following: '$error'");
    }
}
