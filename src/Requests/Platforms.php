<?php 

namespace Flukedit\IgdbPhpWrapper\Requests;

use Flukedit\IgdbPhpWrapper\Interfaces\RequestInterface;

class Platforms extends Base implements RequestInterface
{
    protected $endpoint = 'platforms';

    protected $defaultFields = [
        'abbreviation',
        'alternative_name',
        'category',
        'checksum',
        'created_at',
        'generation',
        'name',
        'platform_logo',
        'product_family',
        'slug',
        'summary',
        'updated_at',
        'url',
        'versions',
        'websites'
    ];
}