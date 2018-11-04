<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $contactFormData = $form->getData();

//            SEND EMAIL HERE
//            $message = (new \Swift_Message('Hello '.$contactFormData['name']))
//                ->setFrom('send@example.com')
//                ->setTo($contactFormData['email'])
//                ->setBody(
//                    $this->renderView(
//                    // templates/emails/registration.html.twig
//                        'emails/registration.html.twig',
//                        array('name' => $name)
//                    ),
//                    'text/html'
//                );
//
//                $mailer->send($message);



        }

        return $this->render('contact/contact.html.twig', [
            'our_form' => $form->createView(),
        ]);
    }
}
