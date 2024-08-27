<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Equipe;
use App\Entity\Projet;
use App\Entity\Tache;
use App\Repository\EquipeRepository;
use App\Repository\NotificationRepository;
use App\Repository\ProjetRepository;
use App\Repository\TacheRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class HomeController extends AbstractController
{
  #[Route('/',name:'app_root')]
  public function root(): RedirectResponse
    {
        return $this->redirectToRoute('app_login');
    }
  
  #[Route('/home-conf', name: 'app_home_conf')]
    public function conf(Security $security, NotificationRepository $notificationRepo,ProjetRepository $projet,TacheRepository $tache, EquipeRepository $equipe): Response
    {
        if($security->getUser() instanceof Client){
          return $this->redirectToRoute('app_user_project');
        }else{
          return $this->redirectToRoute('app_home');
        }

        
    }

    #[Route('/home',name:'app_home')]
    public function index(SessionInterface $session, NotificationRepository $notificationRepo,ProjetRepository $projet,TacheRepository $tache, EquipeRepository $equipe,Security $security): Response
    {

        $notifications = $notificationRepo->findBy(['IsRead'=>false]);
        $notificationsfiltered =[];
        foreach ($notifications as $notification){
            if(!empty($notification->getTitre())&& !empty($notification->getDescription())&&!empty($notification->getClient())){
                $notificationsfiltered[]=$notification;
            }
        }
        return $this->render('admindek-html/index.html.twig', [
            'controller_name' => 'HomeController',
            'notifications'=>$notificationsfiltered,
            'tache'=>$tache->findAll(),
            'equipe'=>$equipe->findAll(),
            'projet'=>$projet->findAll(),
            
        ]);
     
        
        
    }
    
}
