<?php

namespace App\Controller;

use App\Classe\Search;
use App\Entity\Product;
use App\Form\SearchType;
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
        $search = new Search;
        $formSearch=$this->createForm(SearchType::class, $search);
        
        // on écoute a requête entrante du formulaire
        $formSearch->handleRequest($request);

        //si le formulaire est soumis et qu'il est valide c'est-à-dire que les données renseignées correspondent aux type de champs définis dans le fichier RegisterType.php
        if($formSearch->isSubmitted() && $formSearch->isValid()){
            // récupère les produits en fonction des critères de recherches sélectionnés par l'utilisateur
            $products = $this->entityManager->getRepository(Product::class)->findWithSearch($search);
        
        }else{
             // récupération de tous les produits
            $products = $this->entityManager->getRepository(Product::class)->findAll();
        
        }
        
        
        return $this->render('product/index.html.twig',[
            'products' => $products,
            'formSearch' => $formSearch->createView() //permet d'afficher le formulaire de recherche 
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
