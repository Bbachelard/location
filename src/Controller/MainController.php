<?php
namespace App\Controller;

use App\Service\DateHelper;
use App\Repository\LocationRepository;
use App\Entity\Location;
use App\Form\LocationType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use DateTime;


class MainController extends AbstractController{

    #[Route('/redirection', name: 'app_redirection')]
    public function index(DateHelper $dateHelper): RedirectResponse
    {
        $today = $dateHelper->getToday()->format('Y-m-d');
        $url = $this->generateUrl('app_jour', ['date' => $today]);
        return $this->redirect($url);
    }


    #[Route('/location',name:'app_location')]
    public function location(Request $request,EntityManagerInterface $entityManagerInterface){
        $location = new Location();
        $form =$this->createForm(LocationType::class, $location);
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            $entityManagerInterface->persist($location);
            $entityManagerInterface->flush();
            $this->addFlash('success','félicitation, vous avez créé un produit : <b>'.$location->getNom()."</b>");
            return $this->redirectToRoute('app_location');
        }

        return $this->render('location.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    
    #[Route('/jour/{date}', name: 'app_jour', requirements: ['date' => '\d{4}-\d{2}-\d{2}'])]
   
    public function jour($date,EntityManagerInterface $entityManagerInterface,LocationRepository $locationRepository){

        $repository = $entityManagerInterface->getRepository(Location::class);
        $dateObj = new \DateTime($date);
        // Récupérer toutes les locations pour la journée spécifiée
        $locations = $locationRepository->findBy(['dateJour' => $dateObj]);
        // Trier les locations par heure de location
        usort($locations, function($a, $b) {
            return $a->getDate()->format('H:i') <=> $b->getDate()->format('H:i');
        });
        $currentDate = new DateTime($date);
        $previousDate = (clone $currentDate)->modify('-1 day')->format('Y-m-d');
        $nextDate = (clone $currentDate)->modify('+1 day')->format('Y-m-d');

        $total = $locationRepository->getTotalQuantityAndEarningsForDate($date);
        $totals = [
            'totalCB' => $locationRepository->getTotalCB($date),
            'totalCV' => $locationRepository->getTotalCV($date),
            'totalEspece' => $locationRepository->getTotalEspece($date),
        ];


        return $this->render('jour.html.twig',[
            'locations' => $locations,
            'currentDate' => $currentDate,
            'previousDate' => $previousDate,
            'nextDate' => $nextDate,
            'totalQuantityRented' => $total['totalQuantityRented'],
            'totalEarnings' => $total['totalEarnings'],
            'totals'=>$totals,
        ]);
    } 

    #[Route('/calandrier',name:'app_calandrier')]
    public function calandrier(EntityManagerInterface $entityManagerInterface){

        return $this->render('calandrier.html.twig');
    }
}
    
