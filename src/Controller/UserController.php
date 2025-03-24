<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class UserController extends AbstractController
{
    #[Route('/api/user/profile', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function userProfile(): JsonResponse
    {
        return new JsonResponse(['message' => 'Welcome, User!']);
    }

    #[Route('/api/admin/dashboard', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function adminDashboard(): JsonResponse
    {
        return new JsonResponse(['message' => 'Welcome, Admin!']);
    }
}
