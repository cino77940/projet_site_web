<?php

namespace App\Controller;

use App\Form\EditProfileType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/user/editprofile', name: 'app_editprofile')]
    public function editprofile(Request $request)
    {
    $user = $this->getUser();
    $form = $this->createForm(EditProfileType::class, $user);
    
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $this->addFlash('success', 'Votre profil a bien été modifié');
        return $this->redirectToRoute('app_user');
    }
    return $this->render('user/editprofile.html.twig', [
        'form' => $form->createView(),
    ]);
    }
}