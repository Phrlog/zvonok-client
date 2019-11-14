<?php

namespace Phrlog\Zvonok\Phone\Response;

use Phrlog\Zvonok\Phone\Response\ValueObject\RegionData;

/**
 * Class RegionResponse
 */
class RegionResponse implements ResponseInterface
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var RegionData
     */
    public $data;

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @param RegionData $data
     */
    public function setData(RegionData $data): void
    {
        $this->data = $data;
    }
}
