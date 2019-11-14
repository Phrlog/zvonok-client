<?php

namespace Phrlog\Zvonok\Phone\Response\ValueObject;

class RegionData
{
    /**
     * @var string
     */
    public $firstCode;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var int
     */
    public $region;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $phoneType;

    /**
     * @var string
     */
    public $MNC;

    /**
     * @param string $firstCode
     */
    public function setFirstCode(string $firstCode): void
    {
        $this->firstCode = $firstCode;
    }

    /**
     * @param string $operator
     */
    public function setOperator(string $operator)
    {
        $this->operator = $operator;

    }

    /**
     * @param int $region
     */
    public function setRegion(int $region)
    {
        $this->region = $region;
    }

    /**
     * @param string $regionName
     */
    public function setRegionName(string $regionName)
    {
        $this->regionName = $regionName;
    }

    /**
     * @param string $timezone
     */
    public function setTimezone(string $timezone)
    {
        $this->timezone = $timezone;
    }

    /**
     * @param string $phoneType
     */
    public function setPhoneType(string $phoneType)
    {
        $this->phoneType = $phoneType;
    }

    /**
     * @param string $MNC
     */
    public function setMNC(string $MNC)
    {
        $this->MNC = $MNC;
    }
}
