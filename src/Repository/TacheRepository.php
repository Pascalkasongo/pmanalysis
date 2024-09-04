<?php

namespace App\Repository;

use App\Entity\Client;
use App\Entity\Tache;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tache>
 *
 * @method Tache|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tache|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tache[]    findAll()
 * @method Tache[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TacheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tache::class);
    }

//    /**
//     * @return Tache[] Returns an array of Tache objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Tache
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

public function findByChef($chef): array
    {
        return $this->createQueryBuilder('t')
            ->join('t.equipe', 'e')
            ->andWhere('e.chef = :chef')
            ->join('t.etat','s' )
            ->andWhere('s.nom_etat IN (:encour, :bloquer)')
            ->setParameter('chef', $chef)
            ->setParameter('encour', 'Encours')
            ->setParameter('bloquer', 'Bloquer')
            ->getQuery()
            ->getResult();
    }

    // public function findDistinctSprintsByChef($chef): array
    // {
    //     return $this->createQueryBuilder('s') // La racine est maintenant l'entité `Sprint`
    //         ->distinct()                      // Assurer que les résultats sont distincts
    //         ->join('s.taches', 't')           // Joindre l'entité `Tâche` associée au `Sprint`
    //         ->join('t.equipe', 'e')           // Joindre l'entité `Equipe` associée à la `Tâche`
    //         ->where('e.chef = :chef')         // Filtrer par le chef
    //         ->andWhere('s.is_completed = :completed') // Filtrer les sprints non complétés
    //         ->setParameter('chef', $chef)     // Passer la valeur du chef en paramètre
    //         ->setParameter('completed', false) // Passer la valeur pour `is_completed`
    //         ->getQuery()
    //         ->getResult();                   // Récupérer les résultats
    // }

    public function findByClient(Client $client): array
    {
        return $this->createQueryBuilder('t')
            ->join('t.projet', 'p')
            ->where('p.client = :client')
            ->where('t.is_notified = :notified')
            ->setParameter('notified', true)
            ->getQuery()
            ->getResult();
    }
    
    
}


