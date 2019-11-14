<?php

namespace Phrlog\Zvonok\Phone\Response;

/**
 * Class AddCallResponse
 */
class AddCallResponse implements ResponseInterface
{
    /**
     * @var int
     */
    public $callId;

    /**
     * @var string
     */
    public $balance;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var \DateTime
     */
    public $created;

    /**
     * @param int $callId
     */
    public function setCallId(int $callId): void
    {
        $this->callId = $callId;
    }

    /**
     * @param string $balance
     */
    public function setBalance(string $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated(\DateTime $created): void
    {
        $this->created = $created;
    }
}
