<?php

namespace Francken\Members;

use Francken\Members\Member;
use Broadway\EventHandling\EventBusInterface;
use Broadway\EventStore\EventStoreInterface;
use Broadway\EventSourcing\AggregateFactory\AggregateFactoryInterface;
use Broadway\EventSourcing\EventSourcingRepository;

class MemberRepository extends EventSourcingRepository
{
    public function __construct(
        EventStoreInterface $eventStore,
        EventBusInterface $eventBus,
        AggregateFactoryInterface $factory,
        array $eventStreamDecorators = array()
    ) {
        parent::__construct(
            $eventStore,
            $eventBus,
            Member::class,
            $factory,
            $eventStreamDecorators
        );
    }
}
