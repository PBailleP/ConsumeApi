<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class ApiCallService
{

    /**
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ClientExceptionInterface
     * @throws DecodingExceptionInterface
     */
    public function callPokeApi (string $pokemon): array|bool
    {
        $client = HttpClient::create();
        $response = $client->request('GET', "https://pokeapi.co/api/v2/pokemon/" . $pokemon . "/");
        $statusCode = $response->getStatusCode();

        if (200 === $statusCode) {
            return $response->toArray();
        } else {
            return false;
        }
    }
}