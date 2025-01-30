<?php

namespace Ensembl260\Event;

use OldSound\RabbitMqBundle\RabbitMq\Producer;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

class EventProducer
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(private Producer $producer, ?LoggerInterface $logger = null)
    {
        $this->logger = $logger ?: new NullLogger();
    }

    protected function publishEvent(EventMessage $eventMessage)
    {
        $id = is_array($eventMessage->getId()) ? json_encode($eventMessage->getId()) : $eventMessage->getId();
        $this->logger->info("Publishing an event message '{$eventMessage->getEvent()}' for {$eventMessage->getModelType()}:{$id}");

        $this->producer->publish($eventMessage->jsonSerialize());
    }
}
