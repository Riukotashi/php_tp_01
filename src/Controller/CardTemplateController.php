<?php

namespace App\Controller;

use App\Repository\CardTemplateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CardTemplateController extends AbstractController
{
    /**
     * @Route("/templates", name="card_template")
     */
    public function index(CardTemplateRepository $cardTemplateRepository)
    {
        $cards = $cardTemplateRepository->findAll();
        return $this->render('card_template/index.html.twig', [
            'cards' => $cards,
        ]);
    }
}
