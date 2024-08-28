<?php

namespace App\Form;

use App\Entity\Employe;
use App\Entity\Fonction;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class EmployeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_employe')
            ->add('prenom_employe')
            ->add('adresse')
            ->add('telephone')
            ->add('roles', ChoiceType::class, [
                'choices'  => [
                    'Chef de Projet' => 'ROLE_CHEF_PROJET',
                    'Chef' => 'ROLE_CHEF',
                    'Directeur'=>'ROLE_DIRECTEUR',
                    'Administrateur'=>'ROLE_ADMIN'
                ],
                'attr' => ['class' => 'form-control'],
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('email')
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('fonction', EntityType::class, [
                'class' => Fonction::class,
                'choice_label' => 'name',
                'multiple' => false,
                'expanded' => false,
                'attr' => ['class' => 'form-control'],
            ])
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employe::class,
        ]);
    }
}
