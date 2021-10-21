<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; 
use Symfony\Component\HttpKernel\Profiler\Profiler;

class MainController extends AbstractController
{
    
        /**
        * @Route("/user/main")
        */
    public function main(): Response
    {
        
        
        // get the user information and notifications somehow
        //$userFirstName = 'Kerem';
        $userNotifications = ['cd', '...'];

        // the template path is the relative file path from `templates/`
        return $this->render('/notifications.html.twig');
    }
}

?>