<?php

namespace App\Form;

use App\Entity\Candidature;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;



class CandidatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          //  ->add('id_candidat')
          //  ->add('id_offer')
            ->add('nom')
            ->add('prenom')
            ->add('sexe', ChoiceType::class,[
                'choices'  => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ],
            ])
            ->add('email')
            ->add('date_naiss')
            ->add('num')
            ->add('status', ChoiceType::class,[
                'choices'  => [
                    'Sans emploi' => 'Sans emploi',
                    'Employé(e)' => 'Employé(e)',
                    'Indépendant' => 'Indépendant',
                ],
            ])
            ->add('diplome', ChoiceType::class,[
                'choices'  => [
                    'Bac' => 'Bac',
                    'Ingénieur' => 'Ingénieur',
                    'Master' => 'Master',
                    'Doctorat' => 'Doctorat',

                ],
            ])
            ->add('cv', FileType::class,[
                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Svp mettre un fichier pdf ',
                    ])],
            ]         )
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidature::class,
        ]);
    }
}
