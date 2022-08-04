<?php

namespace App\Actions;

use DateTime;

final class Action
{
    private DateTime $timestamp;
    private ActionDispatchType $dispatchType;
    private ActionType $actionType;
    private ReplyType $replyType;
    private ActionOwner $owner;
    private bool $isDelayed;
    private int $delayTime;
    private string $content;
    private int $amountOfWords;
    private bool $inBusinessHours;
    private bool $isFeedbackMessage;
    private ?string $cannedResponseId;
    private ?string $businessHourScheduleId;
    private ?Status $statusFrom;
    private ?Status $statusTo;

    public function __construct(
        DateTime $timestamp,
        ActionDispatchType $dispatchType,
        ActionType $actionType,
        ReplyType $replyType,
        ActionOwner $owner,
        bool $isDelayed,
        int $delayTime,
        string $content,
        int $amountOfWords,
        bool $inBusinessHours,
        bool $isFeedbackMessage,
        ?string $cannedResponseId,
        ?string $businessHourScheduleId,
        ?Status $statusFrom,
        ?Status $statusTo
    ) {
        $this->timestamp = $timestamp;
        $this->dispatchType = $dispatchType;
        $this->actionType = $actionType;
        $this->replyType = $replyType;
        $this->owner = $owner;
        $this->isDelayed = $isDelayed;
        $this->delayTime = $delayTime;
        $this->content = $content;
        $this->amountOfWords = $amountOfWords;
        $this->inBusinessHours = $inBusinessHours;
        $this->isFeedbackMessage = $isFeedbackMessage;
        $this->cannedResponseId = $cannedResponseId;
        $this->businessHourScheduleId = $businessHourScheduleId;
        $this->statusFrom = $statusFrom;
        $this->statusTo = $statusTo;
    }

    public function getTimestamp(): DateTime
    {
        return $this->timestamp;
    }

    public function setTimestamp(DateTime $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    public function getDispatchType(): ActionDispatchType
    {
        return $this->dispatchType;
    }

    public function setDispatchType(ActionDispatchType $dispatchType): void
    {
        $this->dispatchType = $dispatchType;
    }

    public function getActionType(): ActionType
    {
        return $this->actionType;
    }

    public function setActionType(ActionType $actionType): void
    {
        $this->actionType = $actionType;
    }

    public function getReplyType(): ReplyType
    {
        return $this->replyType;
    }

    public function setReplyType(ReplyType $replyType): void
    {
        $this->replyType = $replyType;
    }

    public function getOwner(): ActionOwner
    {
        return $this->owner;
    }

    public function setOwner(ActionOwner $owner): void
    {
        $this->owner = $owner;
    }

    public function isDelayed(): bool
    {
        return $this->isDelayed;
    }

    public function setIsDelayed(bool $isDelayed): void
    {
        $this->isDelayed = $isDelayed;
    }

    public function getDelayTime(): int
    {
        return $this->delayTime;
    }

    public function setDelayTime(int $delayTime): void
    {
        $this->delayTime = $delayTime;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getAmountOfWords(): int
    {
        return $this->amountOfWords;
    }

    public function setAmountOfWords(int $amountOfWords): void
    {
        $this->amountOfWords = $amountOfWords;
    }

    public function isInBusinessHours(): bool
    {
        return $this->inBusinessHours;
    }

    public function setInBusinessHours(bool $inBusinessHours): void
    {
        $this->inBusinessHours = $inBusinessHours;
    }

    public function isFeedbackMessage(): bool
    {
        return $this->isFeedbackMessage;
    }

    public function setIsFeedbackMessage(bool $isFeedbackMessage): void
    {
        $this->isFeedbackMessage = $isFeedbackMessage;
    }

    public function getCannedResponseId(): ?string
    {
        return $this->cannedResponseId;
    }

    public function setCannedResponseId(?string $cannedResponseId): void
    {
        $this->cannedResponseId = $cannedResponseId;
    }

    public function getBusinessHourScheduleId(): ?string
    {
        return $this->businessHourScheduleId;
    }

    public function setBusinessHourScheduleId(?string $businessHourScheduleId): void
    {
        $this->businessHourScheduleId = $businessHourScheduleId;
    }

    public function getStatusFrom(): ?Status
    {
        return $this->statusFrom;
    }

    public function setStatusFrom(?Status $statusFrom): void
    {
        $this->statusFrom = $statusFrom;
    }

    public function getStatusTo(): ?Status
    {
        return $this->statusTo;
    }

    public function setStatusTo(?Status $statusTo): void
    {
        $this->statusTo = $statusTo;
    }
}
