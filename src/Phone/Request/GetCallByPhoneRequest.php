<?php

namespace Phrlog\Zvonok\Phone\Request;

/**
 * Class GetCallByPhoneRequest
 */
class GetCallByPhoneRequest extends BaseRequest
{
    protected const URI = '/lk/cabapi_external/api/v1/phones/calls_by_phone/';

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $campaign_id;

    /**
     * @var string
     */
    protected $from_created_date;

    /**
     * @var string
     */
    protected $to_created_date;

    /**
     * @var string
     */
    protected $from_updated_date;

    /**
     * @var string
     */
    protected $to_updated_date;

    /**
     * GetCallByPhoneRequest constructor.
     * @param string $phone
     * @param string $campaignId
     */
    public function __construct(string $phone, string $campaignId)
    {
        $this->phone = $phone;
        $this->campaign_id = $campaignId;
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @param string $campaignId
     *
     * @return $this
     */
    public function setCampaignId(string $campaignId): self
    {
        $this->campaign_id = $campaignId;

        return $this;
    }

    /**
     * @param string $fromCreatedDate
     *
     * @return $this
     */
    public function setFromCreatedDate(string $fromCreatedDate): self
    {
        $this->from_created_date = $fromCreatedDate;

        return $this;
    }

    /**
     * @param string $toCreatedDate
     *
     * @return $this
     */
    public function setToCreatedDate(string $toCreatedDate): self
    {
        $this->to_created_date = $toCreatedDate;

        return $this;
    }

    /**
     * @param string $fromUpdatedDate
     *
     * @return $this
     */
    public function setFromUpdatedDate(string $fromUpdatedDate): self
    {
        $this->from_updated_date = $fromUpdatedDate;

        return $this;
    }

    /**
     * @param string $toUpdatedDate
     *
     * @return $this
     */
    public function setToUpdatedDate(string $toUpdatedDate): self
    {
        $this->to_updated_date = $toUpdatedDate;

        return $this;
    }

    /**
     * @return array
     */
    protected function getAvailableParams(): array
    {
        return [
            'campaign_id',
            'phone',
            'from_created_date',
            'to_created_date',
            'from_updated_date',
            'to_updated_date'
        ];
    }

    /**
     * @return string
     */
    protected function getUri(): string
    {
        return static::URI;
    }
}
