<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Form\DemandeType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DemandeController extends AbstractController
{
   
    #[Route(' /get-sous-categorie-by-categorie-id')]
    public function getSousCategorieByCategorieId(Request $request, CategorieRepository $categorieRepository){
        $categorieId = $request->get('catId');
        $categorie = $categorieRepository->find($categorieId);
        $htmlToReturn = '';
        foreach($categorie->getSousCategories() as $sousCategorie){
            $htmlToReturn .= '<option value="'.$sousCategorie->getId().'">'.$sousCategorie->getNom().'</option>';
        }
        return new Response($htmlToReturn);
    }

    #[Route('/demande', name: 'app_demande')]
    public function index(EntityManagerInterface $entityManagerInterface, Request $request): Response
    {

        $demande=new Demande();
        $form=$this->createForm(DemandeType::class,$demande);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $demande->setUser($this->getUser());
            $entityManagerInterface->persist($demande);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('app_demande');
        }

        return $this->render('demande/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
