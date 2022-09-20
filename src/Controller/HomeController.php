<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\LocationRepository;
use App\Repository\MissionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CategorieRepository $categorieRepository, MissionRepository $missionRepository, LocationRepository $locationRepository ): Response
    {
        $categories =  $categorieRepository->findBy([], [], 8);
        $missions = $missionRepository->findBy([], [], 4);
        $locations = $locationRepository->findBy([], [], 4);
        return $this->render('home/index.html.twig', [
            'categories' => $categories,
            'missions' => $missions,
            'locations' => $locations
        ]);
    }
}
