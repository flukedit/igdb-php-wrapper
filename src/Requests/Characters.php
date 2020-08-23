<?php 

namespace Flukedit\IgdbPhpWrapper\Requests;

use Flukedit\IgdbPhpWrapper\Interfaces\RequestInterface;

class Characters extends Base implements RequestInterface
{
    protected $endpoint = 'characters';

    protected $defaultFields = [
        'akas',
        'checksum',
        'country_name',
        'created_at',
        'description',
        'games',
        'gender',
        'mug_shot',
        'name',
        'people',
        'slug',
        'species',
        'updated_at',
        'url'
    ];
}