<?php

declare(strict_types=1);

namespace GoldSpecDigital\ObjectOrientedOAS\Objects;

use GoldSpecDigital\ObjectOrientedOAS\Utilities\Arr;

/**
 * @property string|null $name
 * @property string|null $identifier
 * @property string|null $url
 */
class License extends BaseObject
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $identifier;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @param string|null $name
     * @return static
     */
    public function name(?string $name): self
    {
        $instance = clone $this;

        $instance->name = $name;

        return $instance;
    }

    /**
     * @param string|null $identifier
     * @return static
     */
    public function identifier(?string $identifier): self
    {
        $instance = clone $this;

        $instance->identifier = $identifier;

        return $instance;
    }

    /**
     * @param string|null $url
     * @return static
     */
    public function url(?string $url): self
    {
        $instance = clone $this;

        $instance->url = $url;

        return $instance;
    }

    /**
     * @return array
     */
    protected function generate(): array
    {
        return Arr::filter([
            'name' => $this->name,
            'identifier' => $this->identifier,
            'url' => $this->url,
        ]);
    }

    public static function __set_state(array $properties)
    {
        return parent::__set_state($properties)
            ->name($properties['name'])
            ->identifier($properties['identifier'])
            ->url($properties['url']);
    }
}
