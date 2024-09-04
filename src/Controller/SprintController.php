<?php

namespace App\Controller;

use App\Entity\Sprint;
use App\Form\SprintType;
use App\Repository\NotificationRepository;
use App\Repository\SprintRepository;
use App\Repository\TacheRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security as CoreSecurity;

#[Route('/sprint')]
class SprintController extends AbstractController
{
    private NotificationRepository $notification;

    public function __construct(NotificationRepository $notification) {
        $this->notification = $notification;
    }
    // #[Route('/sprints/{projectId}', name: 'sprints_by_project')]
    // public function getSprintsByProject(int $projectId, SprintRepository $sprintRepository): JsonResponse
    // {
    //     $sprints = $sprintRepository->findBy(['projet' => $projectId]);

    //     $response = [];
    //     foreach ($sprints as $sprint) {
    //         $response[] = [
    //             'id' => $sprint->getId(),
    //             'titre' => $sprint->getTitre(),
    //         ];
    //     }

    //     return new JsonResponse($response);
    // }


    #[Route('/', name: 'app_sprint_index', methods: ['GET'])]
    public function index(SprintRepository $sprintRepository): Response
    {
        return $this->render('sprint/index.html.twig', [
            'sprints' => $sprintRepository->findAll(),
            'notifications'=> $this->notification->findBy(['IsRead'=>false]),
            'notification_read'=>$this->notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/new', name: 'app_sprint_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sprint = new Sprint();
        $form = $this->createForm(SprintType::class, $sprint);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($sprint);
            $entityManager->flush();

            return $this->redirectToRoute('app_sprint_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sprint/new.html.twig', [
            'sprint' => $sprint,
            'form' => $form,
            'notifications'=> $this->notification->findBy(['IsRead'=>false]),
            'notification_read'=>$this->notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/{id}', name: 'app_sprint_show', methods: ['GET'])]
    public function show(Sprint $sprint): Response
    {
        return $this->render('sprint/show.html.twig', [
            'sprint' => $sprint,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_sprint_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Sprint $sprint, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SprintType::class, $sprint);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_sprint_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sprint/edit.html.twig', [
            'sprint' => $sprint,
            'form' => $form,
            'notifications'=> $this->notification->findBy(['IsRead'=>false]),
            'notification_read'=>$this->notification->findBy(['IsRead'=>true])
        ]);
    }

    #[Route('/{id}', name: 'app_sprint_delete', methods: ['POST'])]
    public function delete(Request $request, Sprint $sprint, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sprint->getId(), $request->request->get('_token'))) {
            $entityManager->remove($sprint);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_sprint_index', [], Response::HTTP_SEE_OTHER);
    }
   
}
