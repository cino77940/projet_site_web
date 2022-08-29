<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    #[Route('/categorie', name: 'app_categorie')]
    public function index(CategorieRepository $categorieRepository): Response
    {
        $categories =  $categorieRepository->findAll();
        return $this->render('categorie/index.html.twig', [
            'categories' => $categories,
        ]);
    }
    #[Route('/categorie/{slug}', name: 'app_categorie_show')]
    public function show(CategorieRepository $categorieRepository, string $slug): Response
    {
        $categorie =  $categorieRepository->findOneBy(["slug" => $slug], ["nom"=>"ASC"]);
        return $this->render('categorie/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }
}
