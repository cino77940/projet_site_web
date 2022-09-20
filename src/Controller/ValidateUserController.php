<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ResendEmailType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ValidateUserController extends AbstractController
{
    #[Route('/validate-email', name: 'app_resend_email')]
    public function resendMail(Request $request, UserRepository $userRepository, EntityManagerInterface $entityManagerInterface): Response{
        $user = new User();
        $form = $this->createForm(ResendEmailType::class, null);
        $form->handleRequest($request);
      //dd($form->getData()->getEmail());
        if (!is_null($form->getData())) {
           
            //$user = $form->getData();
            $email = $form->getData()->getEmail();
            $user = $userRepository->findOneBy(["email"=> $email]);
          
            if(!is_null($user)){ 
                $user->setIsVerified(true);
                $entityManagerInterface->persist($user);
                $entityManagerInterface->flush();
                $this->addFlash('success', 'Compte activé');
            }else{
                $this->addFlash('danger', 'Cette adresse mail est introuvable');
            } 
            return $this->redirectToRoute('app_home');
        }
        return $this->render('registration/resend_email.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
