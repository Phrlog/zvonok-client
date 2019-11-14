<?php

namespace Phrlog\Zvonok\Phone\Request;

/**
 * Interface RequestInterface
 */
interface RequestInterface
{
    /**
     * @param string $key
     * @return RequestInterface
     */
    public function setPublicKey(string $key);

    /**
     * @return string
     */
    public function generateUri(): string;
}
