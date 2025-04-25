<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
final class ShortenerController
{
    #[Route(path: '/shorten', methods: [Request::METHOD_POST])]
    public function shorten(): JsonResponse
    {
        return new JsonResponse(['value' => 'test']);
    }
}