<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MicroControllerTest extends WebTestCase
{
    public function testDummyEndpoint(): void
    {
        $client = static::createClient();

        $client->request('GET', '/random/10');

        self::assertResponseIsSuccessful();
    }
}