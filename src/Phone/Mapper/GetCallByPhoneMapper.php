<?php

namespace Phrlog\Zvonok\Phone\Mapper;

use Phrlog\Zvonok\Phone\Response\CallResultResponse;
use Phrlog\Zvonok\Phone\Response\ResponseInterface;

/**
 * Class GetCallByPhoneMapper
 */
class GetCallByPhoneMapper implements ResponseInterface
{
    /**
     * @var \JsonMapper
     */
    protected $mapper;

    /**
     * GetCallByPhoneMapper constructor.
     * @param \JsonMapper $mapper
     */
    public function __construct(\JsonMapper $mapper)
    {
        $this->mapper = $mapper;
    }

    /**
     * @param string $json
     *
     * @return CallResultResponse
     * @throws \JsonMapper_Exception
     */
    public function map(string $json): CallResultResponse
    {
        $json = json_decode($json);

        return $this->mapper->map($json, new CallResultResponse());
    }
}
