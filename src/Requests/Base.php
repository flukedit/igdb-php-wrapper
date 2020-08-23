<?php

namespace Flukedit\IgdbPhpWrapper\Requests;

use Flukedit\IgdbPhpWrapper\Client;

abstract class Base
{
    /** @var Client */
    protected $client;

    /** @var string */
    protected $method = 'POST';

    /** @var string */
    protected $endpoint;

    /** @var array */
    protected $defaultFields = [];

    /** @var array */
    protected $customFields = [];

    /** @var mixed */
    protected $conditions;

    public function __construct(array $fields = []) {
        $this->customFields = $fields;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    public function getFields(): array
    {
        return !empty($this->customFields) ? $this->customFields : $this->defaultFields;
    }

    public function getConditions()
    {
        return $this->conditions;
    }
}