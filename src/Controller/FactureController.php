<?php

namespace App\Controller;

use App\Entity\Facture;
use App\Entity\Tache;
use App\Form\FactureType;
use App\Repository\FactureRepository;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Id;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/facture')]
class FactureController extends AbstractController
{
    private NotificationRepository $notification;

    public function __construct(NotificationRepository $notification) {
        $this->notification = $notification;
    }
    #[Route('/', name: 'app_facture_index', methods: ['GET'])]
    public function index(FactureRepository $factureRepository,NotificationRepository $notification): Response
    {
       
        return $this->render('facture/index.html.twig', [
            'factures' => $factureRepository->findAll(),
            'notifications'=> $notification->findBy(['IsRead'=>false]),
            'notification_read'=> $notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/new', name: 'app_facture_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,NotificationRepository $notification): Response
    {
        $facture = new Facture();
        $form = $this->createForm(FactureType::class, $facture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $project_id = $facture->getProjet()->getId();
            $taches = $entityManager->getRepository(Tache::class)->findBy(['projet'=>$project_id]);
            $montant = 0;
           foreach ($taches as $tache){
                $montant = $montant +($tache->getNombreHeure()*$tache->getCoutHoraire());
           }

           $facture->setIsFactured(true);
           $facture->setMontant($montant);

            $entityManager->persist($facture);
            $entityManager->flush();

            return $this->redirectToRoute('app_facture_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('facture/new.html.twig', [
            'facture' => $facture,
            'form' => $form,
            'notifications'=> $notification->findBy(['IsRead'=>false]),
            'notification_read'=> $notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/{id}', name: 'app_facture_show', methods: ['GET'])]
    public function show(int $id, FactureRepository $factureRepository,EntityManagerInterface $em,Facture $facture): Response
    {
        $facture = $factureRepository->find($id);
        $projet = $facture->getProjet()->getId();
        $taches = $em->getRepository(Tache::class)->findBy(['projet'=>$projet]);
        return $this->render('facture/facture.html.twig', [
            'taches' => $taches,
            'projet'=> $projet = $facture->getProjet(),
            'facture'=>$facture
        ]);
    }

    #[Route('/my-facture/{id}', name: 'app_facture_client', methods: ['GET'])]
    public function read(int $id, FactureRepository $factureRepository, EntityManagerInterface $em): Response
    {
        // Récupérer la facture par l'identifiant
        $facture = $factureRepository->find($id);

        // Vérifier si la facture existe
        if (!$facture) {
            throw $this->createNotFoundException('La facture demandée n\'existe pas.');
        }

        // Récupérer le projet associé à la facture
        $projet = $facture->getProjet();

        // Récupérer les tâches associées au projet
        $taches = $em->getRepository(Tache::class)->findBy(['projet' => $projet]);

        // Passer les données à la vue
        return $this->render('facture/facture.html.twig', [
            'taches' => $taches,
            'projet' => $projet,
            'facture' => $facture
        ]);
    }

    #[Route('/{id}/edit', name: 'app_facture_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Facture $facture, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FactureType::class, $facture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_facture_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('facture/edit.html.twig', [
            'facture' => $facture,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_facture_delete', methods: ['POST'])]
    public function delete(Request $request, Facture $facture, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$facture->getId(), $request->request->get('_token'))) {
            $entityManager->remove($facture);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_facture_index', [], Response::HTTP_SEE_OTHER);
    }
}
