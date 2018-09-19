<?php

namespace App\Repository;

use App\Entity\GroupeMember;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GroupeMember|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupeMember|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupeMember[]    findAll()
 * @method GroupeMember[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupeMemberRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GroupeMember::class);
    }

    public function findByMembre($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.member = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

//    /**
//     * @return GroupeMember[] Returns an array of GroupeMember objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GroupeMember
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
