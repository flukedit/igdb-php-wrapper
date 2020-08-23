<?php 

namespace Flukedit\IgdbPhpWrapper\Requests;

use Flukedit\IgdbPhpWrapper\Interfaces\RequestInterface;

class Covers extends Base implements RequestInterface
{
    protected $endpoint = 'covers';

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