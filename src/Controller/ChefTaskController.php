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
       
      
        return $this->render('admindek-html/index_chef_equipe.html.twig',[
            'taches'=>$tache->findByChef($security->getUser())
        ]);
    }

   
}
