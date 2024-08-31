<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Entity\Notification;
use App\Form\EmployeType;
use App\Repository\EmployeRepository;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/employe')]
class EmployeController extends AbstractController
{private NotificationRepository $notification;

    public function __construct(NotificationRepository $notification) {
        $this->notification = $notification;
    }
    #[Route('/', name: 'app_employe_index', methods: ['GET'])]
    public function index(EmployeRepository $employeRepository): Response
    {
        return $this->render('employe/index.html.twig', [
            'employes' => $employeRepository->findAll(),
           'notifications'=> $this->notification->findBy(['IsRead'=>false]),
            'notification_read'=>$this->notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/new', name: 'app_employe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $employe = new Employe();
        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $employe->setPassword(
                $userPasswordHasher->hashPassword(
                    $employe,
                    $form->get('plainPassword')->getData()
                )
            );
            $entityManager->persist($employe);
            $entityManager->flush();

            return $this->redirectToRoute('app_employe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('employe/new.html.twig', [
            'employe' => $employe,
            'form' => $form,
           'notifications'=> $this->notification->findBy(['IsRead'=>false]),
            'notification_read'=>$this->notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/{id}', name: 'app_employe_show', methods: ['GET'])]
    public function show(Employe $employe): Response
    {
        return $this->render('employe/show.html.twig', [
            'employe' => $employe,
            'notifications'=> $this->notification->findBy(['IsRead'=>false]),
            'notification_read'=>$this->notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/{id}/edit', name: 'app_employe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Employe $employe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EmployeType::class, $employe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_employe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('employe/edit.html.twig', [
            'employe' => $employe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_employe_delete', methods: ['POST'])]
    public function delete(Request $request, Employe $employe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$employe->getId(), $request->request->get('_token'))) {
            $entityManager->remove($employe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_employe_index', [], Response::HTTP_SEE_OTHER);
    }
}
