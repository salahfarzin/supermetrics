<?php declare(strict_types=1);

namespace App\Services\Common\Config;

class Config implements ConfigInterface
{
    public function __construct(private array $configs = [])
    {
    }

    /**
     * @param $key
     * @return string|null
     */
    public function get($key): ?string
    {
        return $this->configs[$key];
    }

    /**
     * @param string $key
     * @param mixed $value
     */
    public function put(string $key, mixed $value): void
    {
        $this->configs[$key] = $value;
    }
}