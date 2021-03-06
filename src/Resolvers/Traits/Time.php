<?php

namespace RemotelyLiving\PHPDNS\Resolvers\Traits;

trait Time
{
    /**
     * @var \DateTimeImmutable|null
     */
    private $dateTimeImmutable = null;

    public function setDateTimeImmutable(\DateTimeImmutable $dateTimeImmutable): void
    {
        $this->dateTimeImmutable = $dateTimeImmutable;
    }

    public function getTimeStamp() : int
    {
        return $this->getNewDateTimeImmutable()->getTimestamp();
    }

    private function getNewDateTimeImmutable(): \DateTimeImmutable
    {
        if (!$this->dateTimeImmutable) {
            $this->dateTimeImmutable = new \DateTimeImmutable();
        }

        return /** @scrutinizer ignore-type */ $this->dateTimeImmutable
            ->setTimestamp(time());
    }
}
