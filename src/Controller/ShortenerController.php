<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\Rot13HashedShortenedAlgorithm;
use App\Service\Shortener;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
final class ShortenerController
{
    #[Route(path: '/shorten', methods: [Request::METHOD_POST])]
    public function shorten(Request $request): JsonResponse
    {
        $value = $request->getPayload()->get('value');

        if (null === $value) {
            return new JsonResponse(['error' => 'Value is required'], Response::HTTP_BAD_REQUEST);
        }

        $shortenedValue = new Shortener(new Rot13HashedShortenedAlgorithm())->generate($value);
        // store in an SQL lite database, how possible is collision?

        return new JsonResponse(['value' => $shortenedValue]);
    }
}