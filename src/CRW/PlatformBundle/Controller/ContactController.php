<?php

namespace CRW\PlatformBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ContactController extends Controller
{
    public function indexAction(Request $request)
    {

        // Create the form according to the FormType created previously.
        // And give the proper parameters
        $form = $this->createForm('CRW\PlatformBundle\Form\ContactType',null,array(
            'action' => $this->generateUrl('crw_platform_contact_envoyer'),
            'method' => 'POST'
        ));

        return $this->render('CRWPlatformBundle:Contact:index.html.twig', array(
            'form_contact' => $form->createView()
        ));
    }

    public function envoyerAction(Request $request)
    {
        $response = new JsonResponse();

        // Create the form according to the FormType created previously.
        // And give the proper parameters
        $form = $this->createForm('CRW\PlatformBundle\Form\ContactType',null,array(
            'action' => $this->generateUrl('crw_platform_contact_envoyer'),
            'method' => 'POST'
        ));

        $data = array(
                'status' => false
            );

        if ($request->isMethod('POST')) {

            // Remplis les champs au cas ou le formulaire n'est pas valide
            $form->handleRequest($request);

            if($form->isValid()){

                $data["status"] = true;

                // Envoi de mail
                if($this->sendEmail($form->getData())){
                    // Tout est OK, redirection possible:
                    // return $this->redirectToRoute('redirect_to_somewhere_now');
                }
                else{
                    // Une erreur s'est produite
                    var_dump("ERREUR :(");
                }
            }
            else {
                $data["form"] = $this->renderView('CRWPlatformBundle:Contact:formulaire.html.twig', ["form_contact" => $form->createView()]);
            }
        }

        $response->setData($data);

        return $response;
    }

    public function sendEmail($data){
        

        $mailerUser = $this->container->getParameter('mailer_user');
        $mailerPwd = $this->container->getParameter('mailer_password');
        
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
            ->setUsername($mailerUser)
            ->setPassword($mailerPwd);

        $mailer = \Swift_Mailer::newInstance($transport);

        $message = \Swift_Message::newInstance('Formulaire de contact')
           ->setFrom(array($mailerUser => "Message de ".$data["name"]))
           ->setTo(array($data["email"] => $data["email"]))
           ->setBody("Nom :".$data["name"].
                     "<br>Adresse Mail :".$data["email"].
                     "<br>Telephone :".$data["telephone"].
                     "<br>Message :".$data["message"]);
        
        return $mailer->send($message);
    }
}
