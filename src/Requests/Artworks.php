<?php 

namespace Flukedit\IgdbPhpWrapper\Requests;

use Flukedit\IgdbPhpWrapper\Interfaces\RequestInterface;

class Artworks extends Base implements RequestInterface
{
    protected $endpoint = 'artworks';

    protected $defaultFields = [
        'alpha_channel',
        'animated',
        'checksum',
        'game',
        'height',
        'image_id',
        'url',
        'width'
    ];
}