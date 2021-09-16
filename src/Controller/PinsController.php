<?php

namespace App\Controller;

use App\Entity\Pin;
use App\Repository\PinRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinsController extends AbstractController
{
    /*
    private $em;

    public function __construct(EntityManagerInterface $em){
        $this->em = $em;
    }*/
    public function index(PinRepository $repo ): Response
    {
        $pins = $repo->findAll();

        /* 
        $pin = new Pin();
        $pin->setTitle("Titre 4");
        $pin->setDescription("Description PIN 4");

        $em = $this->getDoctrine()->getManager();
        $em->persist($pin);
        $em->flush();
        */

        return $this->render('pins/index.html.twig', compact('pins'));
    }
}
