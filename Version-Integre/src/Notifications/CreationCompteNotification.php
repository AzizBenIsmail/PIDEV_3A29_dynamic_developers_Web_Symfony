<?php

namespace App\Notifications;



use Swift_Message;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class CreationCompteNotification
{
    /**
     * Propriété contenant le module d'envoi de mails
     * 
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * Propriété contenant l'environnement Twig
     *
     * @var Environment
     */
    private $renderer;

    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }

    /**
     * Méthode de notification (envoi de mail)
     *
     * @return void
     */
    public function notify()
    {
        
        $message = (new Swift_Message('TravelMe - Nouvelle inscription'))

            ->setFrom('travel.me.pridev@gmail.com')
           
            ->setTo('travel.me.pridev@gmail.com')
            
            ->setBody(
                $this->renderer->render(
                    'emails/ajout_compte.html.twig'
                ),
                'text/html'
            );

       
        $this->mailer->send($message);
        
    }
}