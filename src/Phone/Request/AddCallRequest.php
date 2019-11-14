<?php

namespace Phrlog\Zvonok\Phone\Request;

/**
 * Class AddCallRequest
 */
class AddCallRequest extends BaseRequest
{
    protected const URI = '/lk/cabapi_external/api/v1/phones/call/';

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $campaign_id;

    /**
     * AddCallRequest constructor.
     * @param string $phone
     * @param string $campaign_id
     */
    public function __construct(string $phone, string $campaign_id)
    {
        $this->phone = $phone;
        $this->campaign_id = $campaign_id;
    }

    /**
     * @param string $phone
     * @return $this
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setCampaignId(string $id): self
    {
        $this->campaign_id = $id;

        return $this;
    }

    /**
     * @return array
     */
    protected function getAvailableParams(): array
    {
        return ['phone', 'campaign_id'];
    }

    /**
     * @return string
     */
    protected function getUri(): string
    {
        return static::URI;
    }
}
