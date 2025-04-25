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
}