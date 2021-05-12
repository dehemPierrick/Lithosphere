<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    private $entityManager; // permet de se lier à l'ORM doctrine

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/nos-produits", name="products")
     */
    public function index(Request $request): Response
    {

        $products = $this->entityManager->getRepository(Product::class)->findAll();
        
        return $this->render('product/index.html.twig',[
            'products' => $products
        ]);
    }

    /**
     * @Route("/produit/{slug}", name="product")
     */
    public function show($slug): Response
    {

        // récupération de tous les produits
        $product = $this->entityManager->getRepository(Product::class)->findOneBySlug($slug);
        
                
        // si tu ne trouves pas de produit on fait une redirection
        if(!$product) {
            return $this->redirectToRoute('products');
        }
        return $this->render('product/show.html.twig',[
            'product' => $product            
        ]);
    }
}
