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

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

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
                ,'data' => 0,
            ])
            ->add('quantiteSpor', IntegerType::class, [
                'attr'=>['class'=>'form-control','placeholder'=>"Quantité" ,'min'=>"0"]
                ,'data' => 0,
            ])
            ->add('quantiteTyro', IntegerType::class, [
                'attr'=>['class'=>'form-control','placeholder'=>"Quantité",'min'=>"0"]
                ,'data' => 0,
            ])
            ->add('moneyCB', IntegerType::class, [
                'attr'=>['class'=>'form-control','placeholder'=>"Carte bancaire",'min'=>"0"]
                ,'data' => 0,
            ])
            ->add('moneyCheque', IntegerType::class, [
                'attr'=>['class'=>'form-control','placeholder'=>"Quantité",'min'=>"0"]
                ,'data' => 0,
            ])
            ->add('moneyEspece', IntegerType::class, [
                'attr'=>['class'=>'form-control','placeholder'=>"Quantité",'min'=>"0"]
                ,'data' => 0,
            ])
            //->add('quantite')
            ->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
                $data = $event->getData();
    
                // Calculer la somme des quantités
                $sumQuantite = $data['quantiteDec'] + $data['quantiteSpor'] + $data['quantiteTyro'];
                $sumMoney = $data['moneyCB'] + $data['moneyCheque'] + $data['moneyEspece'];
                // Mettre à jour la valeur de la quantité totale dans les données soumises
                $data['quantite'] = $sumQuantite;
                $data['totalMoney'] = $sumMoney;
                // Mettre à jour les données du formulaire
                $event->setData($data);
            });
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Location::class,
        ]);
    }
}
