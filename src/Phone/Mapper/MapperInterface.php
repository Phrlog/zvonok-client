<?php

namespace Phrlog\Zvonok\Phone\Mapper;

use Phrlog\Zvonok\Phone\Response\ResponseInterface;

/**
 * Interface MapperInterface
 */
interface MapperInterface
{
    /**
     * @param string $json
     * @return ResponseInterface
     */
    public function map(string $json): ResponseInterface;
}
