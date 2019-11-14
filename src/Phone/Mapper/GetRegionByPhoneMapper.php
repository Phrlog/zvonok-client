<?php

namespace Phrlog\Zvonok\Phone\Mapper;

use Phrlog\Zvonok\Phone\Response\RegionResponse;
use Phrlog\Zvonok\Phone\Response\ResponseInterface;

/**
 * Class GetRegionByPhoneMapper
 */
class GetRegionByPhoneMapper implements ResponseInterface
{
    /**
     * @var \JsonMapper
     */
    protected $mapper;

    /**
     * GetRegionByPhoneMapper constructor.
     * @param \JsonMapper $mapper
     */
    public function __construct(\JsonMapper $mapper)
    {
        $this->mapper = $mapper;
    }

    /**
     * @param string $json
     *
     * @return RegionResponse
     * @throws \JsonMapper_Exception
     */
    public function map(string $json): RegionResponse
    {
        $json = json_decode($json);
        return $this->mapper->map($json, new RegionResponse());
    }
}
