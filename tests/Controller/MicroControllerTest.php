<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MicroControllerTest extends WebTestCase
{
    public function testDummyEndpoint(): void
    {
        $client = static::createClient(['KERNEL_CLASS' => 'App\Kernel']);

        $client->request('GET', '/random/10');

        self::assertResponseIsSuccessful();
    }
}