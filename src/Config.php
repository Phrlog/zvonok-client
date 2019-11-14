<?php

namespace Phrlog\Zvonok;

class Config
{
    private $publicKey;
    private $domain;

    /**
     * Config constructor.
     * @param string $publicKey
     * @param string $domain
     */
    public function __construct(string $publicKey, string $domain)
    {
        $this->publicKey = $publicKey;
        $this->domain = $domain;
    }

    /**
     * @return string
     */
    public function publicKey(): string
    {
        return $this->publicKey;
    }

    /**
     * @return string
     */
    public function domain(): string
    {
        return $this->domain;
    }

    /**
     * @param string $publicKey
     * @return Config
     */
    public static function createCalltools(string $publicKey): Config
    {
        return new self($publicKey, 'https://calltools.ru');
    }
}
