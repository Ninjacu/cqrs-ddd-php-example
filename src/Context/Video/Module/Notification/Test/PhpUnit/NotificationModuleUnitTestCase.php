<?php

namespace CodelyTv\Context\Video\Module\Notification\Test\PhpUnit;

use CodelyTv\Context\Video\Module\Notification\Domain\NotificationRepository;
use CodelyTv\Context\Video\Test\PhpUnit\VideoContextUnitTestCase;
use Mockery\MockInterface;

abstract class NotificationModuleUnitTestCase extends VideoContextUnitTestCase
{
    private $repository;

    /** @return NotificationRepository|MockInterface */
    protected function repository()
    {
        return $this->repository = $this->repository ?: $this->mock(NotificationRepository::class);
    }
}
