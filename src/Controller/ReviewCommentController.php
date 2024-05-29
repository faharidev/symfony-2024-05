<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReviewCommentController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private MessageBusInterface $bus,
    ) {
    }

    #[Route('/review/comment', name: 'review_comment')]
    public function __invoke(): Response
    {
        return $this->render('review_comment.html.twig', [
            'controller_name' => 'ReviewCommentController',
        ]);
    }
}
