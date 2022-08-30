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

    #[Route('/demande', name: 'app_demande_index')]
    public function index(EntityManagerInterface $entityManagerInterface, Request $request): Response
    {

        $demande=new Demande();
        $form=$this->createForm(DemandeType::class,$demande);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $demande->setUser($this->getUser());
            $entityManagerInterface->persist($demande);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('app_demande_index');
        }

        return $this->render('demande/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/demande/{id}', name: 'app_demande_show')]
    public function show(Demande $demande): Response
    {
        return $this->render('demande/show.html.twig', [
            'demande' => $demande,
        ]);
    }

    #[Route('/demande/{id}/edit', name: 'app_demande_edit')]
    public function edit(Request $request, Demande $demande): Response
    {
        $form = $this->createForm(DemandeType::class, $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_demande_index');
        }

        return $this->render('demande/edit.html.twig', [
            'demande' => $demande,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/demande/{id}/delete', name: 'app_demande_delete')]
    public function delete(Request $request, Demande $demande): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demande->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($demande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_demande_index');
    }
    
    
}
