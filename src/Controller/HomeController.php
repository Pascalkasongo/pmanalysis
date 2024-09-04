<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Equipe;
use App\Entity\Projet;
use App\Entity\Tache;
use App\Repository\EquipeRepository;
use App\Repository\FactureRepository;
use App\Repository\NotificationRepository;
use App\Repository\ProjetRepository;
use App\Repository\TacheRepository;
use PhpParser\Node\Stmt\Return_;
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
  
 
    #[Route('/home',name:'app_home')]
    public function index( NotificationRepository $notificationRepo,ProjetRepository $projet,TacheRepository $tache, EquipeRepository $equipe,FactureRepository $facture,Security $security): Response
    {
       if($this->isGranted('ROLE_DIRECTEUR') || $this->isGranted('ROLE_CHEF_PROJET')){
            $notifications_notread = $notificationRepo->findBy(['IsRead'=>false]);
            $notifications_read = $notificationRepo->findBy(['IsRead'=>true]);
            $notificationsfiltered =[];
            $notificationsfiltered_read =[];
            foreach ($notifications_notread as $notification){
                if(!empty($notification->getTitre())&& !empty($notification->getDescription())&&!empty($notification->getClient())){
                    $notificationsfiltered[]=$notification;
                }
            }
            foreach ($notifications_read as $notification){
                if(!empty($notification->getTitre())&& !empty($notification->getDescription())&&!empty($notification->getClient())){
                    $notificationsfiltered_read[]=$notification;
                }
            }
            return $this->render('admindek-html/index.html.twig', [
                'controller_name' => 'HomeController',
                'notifications'=>$notificationsfiltered,
                'notification_read'=>$notifications_read,
                'tache'=>$tache->findAll(),
                'equipe'=>$equipe->findAll(),
                'projet'=>$projet->findAll(),
                'facture'=>$facture->getTotalAmount()
                
            ]);
        
        
       }elseif($this->isGranted('ROLE_CHEF')){
            return $this->render('admindek-html/index_chef_equipe.html.twig',[
                'taches'=>$tache->findByChef($security->getUser())
            ]);
       }elseif($this->isGranted('ROLE_ADMIN')){
            Return new Response('administrateur');
       }

        
        
    }
    
}
