<?php

namespace App\Controller;
use App\Entity\CGV;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CGVController extends AbstractController
{

    private $entityManager; // permet de se lier à l'ORM doctrine

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/cgv", name="c_g_v")
     */
    public function index(Request $request): Response
    {
        $cgvs = $this->entityManager->getRepository(CGV::class)->findAll();
        return $this->render('cgv/index.html.twig', [
            'cgvs' => $cgvs
        ]);
    }
}
