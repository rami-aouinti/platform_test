<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user")
 * @author Mohamed Rami Aouinti <rami.aouinti@gmail.com>
 */
class UserSettingsController extends AbstractController
{
    /**
     * @Route("/profile", name="user_profile")
     */
    public function show(): Response
    {
        return $this->render('home/profile.html.twig', [
            'user' => $this->getUser(),
        ]);
    }
}
