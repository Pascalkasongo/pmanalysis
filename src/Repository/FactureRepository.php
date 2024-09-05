<?php

namespace App\Repository;

use App\Entity\Facture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\DBAL\Exception;

/**
 * @extends ServiceEntityRepository<Facture>
 *
 * @method Facture|null find($id, $lockMode = null, $lockVersion = null)
 * @method Facture|null findOneBy(array $criteria, array $orderBy = null)
 * @method Facture[]    findAll()
 * @method Facture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FactureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Facture::class);
    }

    /**
     * @return float Returns the sum of all facture amounts
     * @throws Exception
     */
    public function getTotalAmount(): float
    {
        // Create a QueryBuilder instance
        $qb = $this->createQueryBuilder('f');

        // Build the query to calculate the sum of amounts
        $qb->select('SUM(f.montant) AS totalAmount'); // Replace 'amount' with the actual field name

        // Execute the query and get the result
        $result = $qb->getQuery()->getSingleScalarResult();

        // Return the total amount, ensuring it's a float
        return (float) $result;
    }
    public function findByClient($client): array
    {
        return $this->createQueryBuilder('f')
            ->join('f.projet', 'p')
            ->join('p.client', 'c')
            ->where('c.id = :client')
            ->andWhere('f.is_factured = :factured')
            ->setParameter('factured', true)
            ->setParameter('client', $client)
            ->getQuery()
            ->getResult();
    }
}
