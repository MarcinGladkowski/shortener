<?php

declare(strict_types=1);

namespace App\Controller;

use Random\RandomException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MicroController extends AbstractController
{
    /**
     * @throws RandomException
     */
    #[Route('/random/{limit}')]
    public function randomNumber(int $limit): Response
    {
        return new JsonResponse([
            'number' => random_int(0, $limit),
        ]);
    }
}