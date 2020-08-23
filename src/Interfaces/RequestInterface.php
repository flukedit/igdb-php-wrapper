<?php

namespace Flukedit\IgdbPhpWrapper\Interfaces;

interface RequestInterface
{
    public function getMethod(): string;
    public function getEndpoint(): string;
    public function getFields(): array;
}