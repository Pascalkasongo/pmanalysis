<?php

namespace App\Controller;

use App\Repository\TacheRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class SprintChefContronllerController extends AbstractController
{
    // #[Route('/sprint-user',name:'app_sprint_user')]
    // public function mySprint(Security $security ,TacheRepository $tache)
    // {
        
    //     return $this->render('sprint_chef_contronller/index.html.twig',[
    //         'sprints'=>$tache->findDistinctSprintsByChef($security->getUser())
    //     ]);
    // }
}
