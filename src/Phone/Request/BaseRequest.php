<?php

namespace Phrlog\Zvonok\Phone\Request;

/**
 * Class BaseRequest
 */
abstract class BaseRequest implements RequestInterface
{
    /**
     * @var string
     */
    protected $public_key;

    /**
     * @param string $key
     * @return BaseRequest
     */
    public function setPublicKey(string $key): self
    {
        $this->public_key = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function generateUri(): string
    {
        $availableParams = array_merge($this->getAvailableParams(), ['public_key']);

        $queryArray = [];
        foreach ($availableParams as $paramName) {
            $queryArray[$paramName] = $this->$paramName;
        }

        return $this->getUri() . '?' . http_build_query(array_filter($queryArray));
    }

    /**
     * @return array
     */
    abstract protected function getAvailableParams(): array;

    /**
     * @return string
     */
    abstract protected function getUri(): string;
}
