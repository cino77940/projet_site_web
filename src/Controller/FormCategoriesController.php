<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormCategoriesController extends AbstractController
{
    #[Route('/form/categories', name: 'app_form_categories')]
    public function index(): Response
    {
        return $this->render('form_categories/index.html.twig', [
            'controller_name' => 'FormCategoriesController',
        ]);
    }
}
