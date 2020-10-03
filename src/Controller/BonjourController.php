<?php

namespace App\Controller;

use App\Entity\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    /**
     * @Route("/bonjour", name="bonjour")
     */
    public function index($number)
    {
        return $this->render('bonjour/index.html.twig', [
            'controller_name' => 'BonjourController',
            'number' => $number


        ]);
    }

    function createUserForm(){
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('name', TextType::class)
            ->add('email', EmailType::class)
            ->add('save', SubmitType::class, [
                'attr' => ['class' => 'btn btn-primary']
            ])
            ->getForm();

        return $this->render('bonjour/form.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
