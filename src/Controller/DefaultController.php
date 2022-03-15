<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/azdazdazd", name="pageAccueil")
     */
    public function homepage()
    {
        return $this->render('index.html.twig');
    }

    #[Route('/question/reponse/{slug}', name: 'afficherQuestion')]
    public function showQuestion(string $slug)
    {

        $responses = [
            'azejflmkekrgfjaefùgrkae',
            'qsjkdfhbqsdjkfqsdmlkfqsjd',
            'qsjkdghsdqjkfhqsdjfhqsdjkhfqhsd'
        ];
        $question = str_replace("-", " ", $slug);

        return $this->render("question/show.html.twig", [
            'question' => $question,
            'responses' => $responses
        ]);
    }


}