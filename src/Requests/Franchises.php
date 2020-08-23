<?php 

namespace Flukedit\IgdbPhpWrapper\Requests;

use Flukedit\IgdbPhpWrapper\Interfaces\RequestInterface;

class Franchises extends Base implements RequestInterface
{
    protected $endpoint = 'franchises';

    protected $defaultFields = [
        'checksum',
        'created_at',
        'games',
        'name',
        'slug',
        'updated_at',
        'url'
    ];
}