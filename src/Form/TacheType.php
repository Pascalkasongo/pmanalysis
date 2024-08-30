<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Etat;
use App\Entity\Priorite;
use App\Entity\Projet;
use App\Entity\Ressource;
use App\Entity\Sprint;
use App\Entity\Tache;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Test\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TacheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_tache')
            ->add('date_from',DateType::class,[
                'widget' => 'single_text',
                'html5' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('date_up',DateType::class,[
                'widget' => 'single_text',
                'html5' => true,
                    'attr' => ['class' => 'form-control'],])
            ->add('nombre_heure')
            ->add('cout_horaire')
            ->add('projet', EntityType::class, [
                'class' => Projet::class,
                'choice_label' => 'nom',
                'multiple' => False,
                'expanded' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('sprint', EntityType::class, [
                'class' => Sprint::class,
                'choice_label' => 'titre',
                'multiple' => False,
                'expanded' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('ressource', EntityType::class, [
                'class' => Ressource::class,
                'choice_label' => 'nom_ressource',
                'multiple' => False,
                'expanded' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('priorite', EntityType::class, [
                'class' => Priorite::class,
                'choice_label' => 'nom_priorite',
                'multiple' => False,
                'expanded' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('etat', EntityType::class, [
                'class' => Etat::class,
                'choice_label' => 'nom_etat',
                'multiple' => False,
                'expanded' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('equipe', EntityType::class, [
                'class' => Equipe::class,
                'choice_label' => 'nom_equipe',
                'multiple' => False,
                'expanded' => false,
                'attr' => ['class' => 'form-control'],
            ])
        ;

        // $builder->get('PROJET')->addEventListener(
        //     FormEvents::PRE_SUBMIT,
        //     function (FormEvent $event) {
        //         $form = $event->getForm();
        //         $data = $event->getData(); // Les données sont ici un tableau et non un objet
        //         $project = $form->getData(); // Obtenir le projet sélectionné
    
        //         // Appel de la méthode pour ajouter le champ des sprints en fonction du projet sélectionné
        //         $this->addSprintField($form->getParent(), $project);
        //     }
        // );
    }

    private function addSprintField(FormInterface $form, ?Projet $project)
{
    // Remplacer le champ sprint avec les sprints du projet sélectionné
    $form->add('sprint', EntityType::class, [
        'class' => Sprint::class,
        'placeholder' => 'Sélectionnez un sprint',
        'choices' => $project ? $project->getSprints() : [],
    ]);
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tache::class,
        ]);
    }
}
