<?php

namespace Application\Domain\Entity;

// Represents a game session
class GameSession
{
    /** @var int */
    private int $id;

    /** @var string */
    private string $player;

    /** @var \DateTimeImmutable */
    private \DateTimeImmutable $startTime;

    /** @var \DateTimeImmutable|null */
    private ?\DateTimeImmutable $endTime;

    /** @var int */
    private int $score;

    /** @var string */
    private string $status;

    public function __construct(int $id, string $player)
    {
        $this->id = $id;
        $this->player = $player;
        $this->startTime = new \DateTimeImmutable();
        $this->endTime = null;
        $this->score = 0;
        $this->status = 'active';
    }

    // Getters and setters
    public function getId(): int
    {
        return $this->id;
    }

    public function getPlayer(): string
    {
        return $this->player;
    }

    public function getStartTime(): \DateTimeImmutable
    {
        return $this->startTime;
    }

    public function getEndTime(): ?\DateTimeImmutable
    {
        return $this->endTime;
    }

    public function setEndTime(\DateTimeImmutable $endTime): void
    {
        $this->endTime = $endTime;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function setScore(int $score): void
    {
        $this->score = $score;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}

