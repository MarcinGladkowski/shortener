<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class ShortenerControllerTest extends WebTestCase
{
    public function testReturnSuccessfulResponse(): void
    {
        $client = static::createClient();

        $client
            ->request('POST', '/shorten');

        self::assertResponseStatusCodeSame(Response::HTTP_BAD_REQUEST);
    }

    /**
     * @throws \JsonException
     */
    public function testReturnValueInResponse(): void
    {
        $client = static::createClient();

        $client
            ->request(
                method: 'POST',
                uri: '/shorten',
                content: json_encode(['value' => 'test'], JSON_THROW_ON_ERROR)
            );

        $jsonResponse = $this->decodeJsonResponse($client);

        self::assertResponseIsSuccessful();
        self::assertArrayHasKey('value', $jsonResponse);
    }

    /**
     * @throws \JsonException
     */
    public function testReturnShortenedValueInResponse(): void
    {
        $client = static::createClient();

        $client
            ->request(
                method: 'POST',
                uri: '/shorten',
                content: json_encode(['value' => 'test'], JSON_THROW_ON_ERROR)
            );

        $jsonResponse = $this->decodeJsonResponse($client);

        self::assertResponseIsSuccessful();
        self::assertEquals('f25f2772', $jsonResponse['value']);
    }

    /**
     * @param KernelBrowser $client
     * @return mixed
     * @throws \JsonException
     */
    private function decodeJsonResponse(KernelBrowser $client): mixed
    {
        return json_decode($client->getResponse()->getContent(), true, 512, JSON_THROW_ON_ERROR);
    }
}