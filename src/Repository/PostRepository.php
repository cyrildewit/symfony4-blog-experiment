<?php

namespace App\Repository;

use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;

class PostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    public function findLatest()
    {
        $qb = $this->createQueryBuilder('p')
            ->andWhere('p.publishedAt <= :now')
            ->setParameter('now', new \DateTime())
            ->getQuery();

        return $qb->execute();
        dump(

        );
        die();
        return $query = $this->getEntityManager()
            ->createQuery('
                SELECT p, a, t
                FROM App:Post p
                WHERE p.publishedAt <= :now
                ORDER BY p.publishedAt DESC
            ')
            ->setParameter('now', new \DateTime())
            ->getResult();
        ;

        return $this->createPaginator($query, $page);

        // ->createQuery('
        //         SELECT p, a, t
        //         FROM App:Post p
        //         JOIN p.author a
        //         LEFT JOIN p.tags t
        //         WHERE p.publishedAt <= :now
        //         ORDER BY p.publishedAt DESC
        //     ')
    }
}
