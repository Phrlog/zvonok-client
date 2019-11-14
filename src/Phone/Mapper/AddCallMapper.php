<?php

namespace Phrlog\Zvonok\Phone\Mapper;

use Phrlog\Zvonok\Phone\Response\AddCallResponse;
use Phrlog\Zvonok\Phone\Response\ResponseInterface;

/**
 * Class CallAddMapper
 */
class AddCallMapper implements ResponseInterface
{
    /**
     * @var \JsonMapper
     */
    protected $mapper;

    /**
     * CallByIdMapper constructor.
     * @param \JsonMapper $mapper
     */
    public function __construct(\JsonMapper $mapper)
    {
        $this->mapper = $mapper;
    }

    /**
     * @param string $json
     *
     * @return AddCallResponse
     * @throws \JsonMapper_Exception
     */
    public function map(string $json): AddCallResponse
    {
        $json = json_decode($json);

        return $this->mapper->map($json, new AddCallResponse());
    }
}
