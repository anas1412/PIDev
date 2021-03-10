<?php

namespace App\Controller;

use App\Entity\Annonce;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonce", name="annonce")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getRepository(Annonce::class);
        $list = $em->findAll();
        return $this->render('annonce/liste_annonce.html.twig', [
            'controller_name' => 'AnnonceController',
            'list'=>$list,
        ]);
    }


}
