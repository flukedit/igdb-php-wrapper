<?php

namespace Flukedit\IgdbPhpWrapper;

use Exception;
use Flukedit\IgdbPhpWrapper\Interfaces\RequestInterface;
use GuzzleHttp\Client as GuzzleClient;

class Client
{
    protected $userKey;

    protected $uri;

    /** @var */
    protected $httpClient;

    public function __construct($uri, $userKey)
    {
        $this->uri = $uri;
        $this->userKey = $userKey;

        $this->httpClient = new GuzzleClient();
    }

    public function request(RequestInterface $request)
    {
        try {
            $response = $this->httpClient->request(
                $request->getMethod(),
                sprintf('%s%s', $this->uri, $request->getEndpoint()),
                [
                    'headers'   => [
                        'user-key' => $this->userKey
                    ], 
                    'body'      => 'fields ' . implode(',', $request->getFields()) . ';'
                ]
            );

            // var_dump($response);
            // die();

            return $response;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}