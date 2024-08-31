<?php

namespace App\Controller;

use App\Entity\Competance;
use App\Form\CompetanceType;
use App\Repository\CompetanceRepository;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/competance')]
class CompetanceController extends AbstractController
{
    private NotificationRepository $notification;

    public function __construct(NotificationRepository $notification) {
        $this->notification = $notification;
    }
    #[Route('/', name: 'app_competance_index', methods: ['GET'])]
    public function index(CompetanceRepository $competanceRepository): Response
    {
        return $this->render('competance/index.html.twig', [
            'competances' => $competanceRepository->findAll(),
            'notifications'=> $this->notification->findBy(['IsRead'=>false]),
            'notification_read'=>$this->notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/new', name: 'app_competance_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $competance = new Competance();
        $form = $this->createForm(CompetanceType::class, $competance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($competance);
            $entityManager->flush();

            return $this->redirectToRoute('app_competance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('competance/new.html.twig', [
            'competance' => $competance,
            'form' => $form,
            'notifications'=> $this->notification->findBy(['IsRead'=>false]),
            'notification_read'=>$this->notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/{id}', name: 'app_competance_show', methods: ['GET'])]
    public function show(Competance $competance): Response
    {
        return $this->render('competance/show.html.twig', [
            'competance' => $competance,
            'notifications'=> $this->notification->findBy(['IsRead'=>false]),
            'notification_read'=>$this->notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/{id}/edit', name: 'app_competance_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Competance $competance, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CompetanceType::class, $competance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_competance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('competance/edit.html.twig', [
            'competance' => $competance,
            'form' => $form,
            'notifications'=> $this->notification->findBy(['IsRead'=>false]),
            'notification_read'=>$this->notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/{id}', name: 'app_competance_delete', methods: ['POST'])]
    public function delete(Request $request, Competance $competance, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$competance->getId(), $request->request->get('_token'))) {
            $entityManager->remove($competance);
            $entityManager->flush();
            
        }

        return $this->redirectToRoute('app_competance_index', [], Response::HTTP_SEE_OTHER);
    }
}
