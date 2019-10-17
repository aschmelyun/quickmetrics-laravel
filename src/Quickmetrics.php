<?php

namespace Aschmelyun\Quickmetrics;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Quickmetrics
{

    private $key;

    public function __construct(string $key) {
        $this->key = $key;
    }

    public function event(string $name, float $val, ?string $dimension = null)
    {
        // send the event to quickmetrics.io's api
        $client = new Client([
            'base_uri' => 'https://qckm.io'
        ]);

        $json = [
            'name' => $name,
            'value' => $val
        ];

        if($dimension) {
            $json['dimension'] = $dimension;
        }

        try {
            $res = $client->request('POST', '/json', [
                'json' => $json,
                'headers' => [
                    'x-qm-key' => $this->key
                ]
            ]);

            return response()->json([
                'code' => $res->getStatusCode(),
                'message' => $res->getReasonPhrase()
            ]);
        } catch(GuzzleException $e) {
            // handle the exception
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }

}