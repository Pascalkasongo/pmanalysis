<?php

namespace App\Controller;

use App\Repository\TacheRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class ChefTaskController extends AbstractController
{
    #[Route('/chef/task', name: 'app_chef_task')]
    public function index(Security $security,TacheRepository $tache): Response
    {
        $user = $security->getUser();
       

        return $this->render('chef_task/index.html.twig', [
            'controller_name' => 'ChefTaskController',
            'taches'=> $tache->findByChef($user)
        ]);
    }
}
