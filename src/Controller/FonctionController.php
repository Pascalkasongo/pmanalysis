<?php

namespace App\Controller;

use App\Entity\Fonction;
use App\Form\FonctionType;
use App\Repository\FonctionRepository;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/fonction')]
class FonctionController extends AbstractController
{
    private NotificationRepository $notification;

    public function __construct(NotificationRepository $notification) {
        $this->notification = $notification;
    }
    #[Route('/', name: 'app_fonction_index', methods: ['GET'])]
    public function index(FonctionRepository $fonctionRepository): Response
    {
        return $this->render('fonction/index.html.twig', [
            'fonctions' => $fonctionRepository->findAll(),
            'notifications'=> $this->notification->findBy(['IsRead'=>false]),
            'notification_read'=>$this->notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/new', name: 'app_fonction_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $fonction = new Fonction();
        $form = $this->createForm(FonctionType::class, $fonction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($fonction);
            $entityManager->flush();

            return $this->redirectToRoute('app_fonction_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fonction/new.html.twig', [
            'fonction' => $fonction,
            'form' => $form,
            'notifications'=> $this->notification->findBy(['IsRead'=>false]),
            'notification_read'=>$this->notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/{id}', name: 'app_fonction_show', methods: ['GET'])]
    public function show(Fonction $fonction): Response
    {
        return $this->render('fonction/show.html.twig', [
            'fonction' => $fonction,
            'notifications'=> $this->notification->findBy(['IsRead'=>false]),
            'notification_read'=>$this->notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/{id}/edit', name: 'app_fonction_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Fonction $fonction, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FonctionType::class, $fonction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_fonction_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('fonction/edit.html.twig', [
            'fonction' => $fonction,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_fonction_delete', methods: ['POST'])]
    public function delete(Request $request, Fonction $fonction, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fonction->getId(), $request->request->get('_token'))) {
            $entityManager->remove($fonction);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fonction_index', [], Response::HTTP_SEE_OTHER);
    }
}
