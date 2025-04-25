<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ShortenerControllerTest extends WebTestCase
{
    public function testReturnSuccessfulResponse(): void
    {
        $client = static::createClient();

        $client
            ->request('POST', '/shorten');

        self::assertResponseIsSuccessful();
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

        $jsonResponse = json_decode($client->getResponse()->getContent(), true, 512, JSON_THROW_ON_ERROR);

        self::assertResponseIsSuccessful();
        self::assertArrayHasKey('value', $jsonResponse);
    }

}