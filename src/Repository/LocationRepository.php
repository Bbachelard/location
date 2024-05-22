<?php

namespace App\Repository;

use App\Entity\Location;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Location>
 */
class LocationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Location::class);
    }
    public function getTotalQuantityAndEarningsForDate($date): array
    {
        $qb = $this->createQueryBuilder('l');
        // Sélectionner la somme de la quantité louée
        $qb->select('SUM(l.quantite) as totalQuantityRented');
        // Ajouter la condition pour la date
        $qb->andWhere('l.dateJour = :date')
           ->setParameter('date', $date);
        // Exécuter la requête pour obtenir la quantité totale louée
        $totalQuantityRented = $qb->getQuery()->getSingleScalarResult();
        // Réinitialiser la sélection pour calculer le gain total
        $qb->resetDQLPart('select');
        // Sélectionner la somme des gains (supposons que chaque location a un prix)
        $qb->select('SUM(l.money ) as totalEarnings');
        $qb->andWhere('l.dateJour = :date')
           ->setParameter('date', $date);
        // Exécuter la requête pour obtenir le gain total
        $totalEarnings = $qb->getQuery()->getSingleScalarResult();
        // Retourner un tableau associatif avec la quantité et le gain
        return [
            'totalQuantityRented' => $totalQuantityRented,
            'totalEarnings' => $totalEarnings,
        ];
        
    }
    public function getTotalCB($date): int
    {   
        $qb = $this->createQueryBuilder('l');
        $qb->select('SUM(l.moneyCB ) as totalCB');
        $qb->andWhere('l.dateJour = :date')
           ->setParameter('date', $date);
        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    public function getTotalCV($date):int 
    {
        $qb = $this->createQueryBuilder('l');
        $qb->select('SUM(l.moneyCheque ) as totalCV');
        $qb->andWhere('l.dateJour = :date')
           ->setParameter('date', $date);
        return (int) $qb->getQuery()->getSingleScalarResult();
       
    }
    public function getTotalEspece($date):int 
    {   
        $qb = $this->createQueryBuilder('l');
        $qb->select('SUM(l.moneyEspece ) as totalEspece');
        $qb->andWhere('l.dateJour = :date')
           ->setParameter('date', $date);
        return (int) $qb->getQuery()->getSingleScalarResult();
      
        
    }


   }

    //    /**
    //     * @return Location[] Returns an array of Location objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Location
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

