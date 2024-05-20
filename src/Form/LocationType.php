<?php

namespace App\Form;

use App\Entity\Location;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class LocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom',TextType::class,[
                'attr'=>['class'=>'form-control','placeholder'=>"Entrer nom"]
            ] )
            
            ->add('tel',TextType::class,[
                'attr'=>['class'=>'form-control','placeholder'=>"Entrer numero telephone"]
            ] )
            ->add('date', DateTimeType::class, [
                'widget' => 'single_text',
                'attr'=>['class'=>'form-control','placeholder'=>"Entrer la date"]
            ])
            ->add('quantiteDec', IntegerType::class, [
                'attr'=>['class'=>'form-control','placeholder'=>"Quantité",'min'=>"0"]
            ])
            ->add('quantiteSpor', IntegerType::class, [
                'attr'=>['class'=>'form-control','placeholder'=>"Quantité" ,'min'=>"0"]
            ])
            ->add('quantiteTyro', IntegerType::class, [
                'attr'=>['class'=>'form-control','placeholder'=>"Quantité",'min'=>"0"]
            ])
            /*
            ->add('moneyCB')
            ->add('moneyCheque')
            ->add('moneyEspece')
            ->add('quantite')*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Location::class,
        ]);
    }
}
