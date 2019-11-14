<?php

namespace Phrlog\Zvonok\Phone\Mapper;

use JsonMapper;
use Phrlog\Zvonok\Phone\Response\CallResultResponse;
use Phrlog\Zvonok\Phone\Response\ResponseInterface;

/**
 * Class GetCallByIdMapper
 */
class GetCallByIdMapper implements ResponseInterface
{
    /**
     * @var JsonMapper
     */
    protected $mapper;

    /**
     * CallByIdMapper constructor.
     * @param JsonMapper $mapper
     */
    public function __construct(JsonMapper $mapper)
    {
        $this->mapper = $mapper;
    }

    /**
     * @see https://zvonok.com/pages/ru/guide/guide_api/#call_by_id
     *
     * @param string $json
     *
     * @return CallResultResponse
     * @throws \JsonMapper_Exception
     */
    public function map(string $json): CallResultResponse
    {
        // calltools.ru свой ответ оборачивают в массив
        $json = json_decode($json)[0];

        return $this->mapper->map($json, new CallResultResponse());
    }
}
