<?php

namespace App\Repository;

use App\Entity\NoticationSprint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NoticationSprint>
 *
 * @method NoticationSprint|null find($id, $lockMode = null, $lockVersion = null)
 * @method NoticationSprint|null findOneBy(array $criteria, array $orderBy = null)
 * @method NoticationSprint[]    findAll()
 * @method NoticationSprint[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NoticationSprintRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NoticationSprint::class);
    }

//    /**
//     * @return NoticationSprint[] Returns an array of NoticationSprint objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NoticationSprint
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
