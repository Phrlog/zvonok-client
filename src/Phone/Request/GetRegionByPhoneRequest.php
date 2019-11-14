<?php

namespace Phrlog\Zvonok\Phone\Request;

/**
 * Class GetRegionByPhoneRequest
 */
class GetRegionByPhoneRequest extends BaseRequest
{
    protected const URI = '/lk/cabapi_external/api/v1/def_codes/by_phone/';

    /**
     * @var string
     */
    protected $phone;

    /**
     * GetRegionByPhoneRequest constructor.
     * @param string $phone
     */
    public function __construct(string $phone)
    {
        $this->phone = $phone;
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
     * @return array
     */
    protected function getAvailableParams(): array
    {
        return ['phone'];
    }

    /**
     * @return string
     */
    protected function getUri(): string
    {
        return static::URI;
    }
}
