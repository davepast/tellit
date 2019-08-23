<?php

namespace App\Controller;

use App\Repository\MessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function index(MessageRepository $messageRepository)
    {
        $message = $messageRepository->newFirst();
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
            'message' => $message
        ]);
    }
}
