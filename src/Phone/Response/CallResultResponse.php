<?php

namespace Phrlog\Zvonok\Phone\Response;

/**
 * Class CallResultResponse
 * @package Phrlog\Zvonok\Response\Phone\Response
 */
class CallResultResponse implements ResponseInterface
{
    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $statusDisplay;

    /**
     * @var string|null
     */
    public $recordedAudio;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string|null
     */
    public $dialStatusDisplay;

    /**
     * @var string|null
     */
    public $dialStatus;

    /**
     * @var int
     */
    public $callId;

    /**
     * @var string|null
     */
    public $userChoice;

    /**
     * @var \DateTime|null
     */
    public $updated;

    /**
     * @var string|null
     */
    public $userChoiceDisplay;

    /**
     * @var string
     */
    public $actionType;

    /**
     * @var \DateTime
     */
    public $created;

    /**
     * @var int
     */
    public $buttonNum;

    /**
     * @var \DateTime|null
     */
    public $completed;

    /**
     * @var int
     */
    public $duration;


    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @param string $statusDisplay
     */
    public function setStatusDisplay(string $statusDisplay): void
    {
        $this->statusDisplay = $statusDisplay;
    }

    /**
     * @param string|null $recordedAudio
     */
    public function setRecordedAudio(?string $recordedAudio): void
    {
        $this->recordedAudio = $recordedAudio;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param null|string $dialStatusDisplay
     */
    public function setDialStatusDisplay(?string $dialStatusDisplay): void
    {
        $this->dialStatusDisplay = $dialStatusDisplay;
    }

    /**
     * @param null|string $dialStatus
     */
    public function setDialStatus(?string $dialStatus): void
    {
        $this->dialStatus = $dialStatus;
    }

    /**
     * @param int $callId
     */
    public function setCallId(int $callId): void
    {
        $this->callId = $callId;
    }

    /**
     * @param null|string $userChoice
     */
    public function setUserChoice(?string $userChoice): void
    {
        $this->userChoice = $userChoice;
    }

    /**
     * @param \DateTime|null $updated
     */
    public function setUpdated(?\DateTime $updated): void
    {
        $this->updated = $updated;
    }

    /**
     * @param string|null $userChoiceDisplay
     */
    public function setUserChoiceDisplay(?string $userChoiceDisplay): void
    {
        $this->userChoiceDisplay = $userChoiceDisplay;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated(\DateTime $created): void
    {
        $this->created = $created;
    }

    /**
     * @param int|null $buttonNum
     */
    public function setButtonNum(?int $buttonNum): void
    {
        $this->buttonNum = $buttonNum;
    }

    /**
     * @param \DateTime|null $completed
     */
    public function setCompleted(?\DateTime $completed): void
    {
        $this->completed = $completed;
    }

    /**
     * @param int|null $duration
     */
    public function setDuration(?int $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @param string|null $actionType
     */
    public function setActionType(?string $actionType): void
    {
        $this->actionType = $actionType;
    }
}
