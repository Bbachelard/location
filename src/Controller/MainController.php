<?php
namespace App\Controller;

use App\Entity\Location;
use App\Form\LocationType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController{

    #[Route('/location',name:'app_location')]
    public function location(Request $request,EntityManagerInterface $entityManagerInterface){
        $location = new Location();
        $form =$this->createForm(LocationType::class, $location);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //$location->setValid(true);
            $entityManagerInterface->persist($location);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('app_location');
        }

        return $this->render('location.html.twig',[
            'form'=>$form->createView()
        ]);
    }


    #[Route('/jour',name:'app_jour')]
    public function jour(EntityManagerInterface $entityManagerInterface){
        $locations = $entityManagerInterface->getRepository(Location::class)->findAll();


        return $this->render('jour.html.twig',[
            'locations'=>$locations
        ]);
    } 

    #[Route('/calandrier',name:'app_calandrier')]
    public function calandrier(EntityManagerInterface $entityManagerInterface){

        return $this->render('calandrier.html.twig');
    }
}
    
