<?php

namespace Phrlog\Zvonok\Phone\Request;

/**
 * Class GetCallByIdRequest
 */
class GetCallByIdRequest extends BaseRequest
{
    protected const URI = '/lk/cabapi_external/api/v1/phones/call_by_id/';

    /**
     * @var string
     */
    protected $call_id;

    /**
     * GetCallByIdRequest constructor.
     * @param string $callId
     */
    public function __construct(string $callId)
    {
        $this->call_id = $callId;
    }

    /**
     * @param string $callId
     *
     * @return $this
     */
    public function setCallId(string $callId): self
    {
        $this->call_id = $callId;

        return $this;
    }

    /**
     * @return array
     */
    protected function getAvailableParams(): array
    {
        return ['call_id'];
    }

    /**
     * @return string
     */
    protected function getUri(): string
    {
        return static::URI;
    }
}
