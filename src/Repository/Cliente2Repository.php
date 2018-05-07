<?php

namespace App\Repository;

use App\Entity\Cliente;
use Doctrine\ORM\EntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class Cliente2Repository extends EntityRepository
{
    public function listaDQL($nombre){
        $em = $this->getEntityManager();
        $arCliente2 = $em->createQueryBuilder()
            ->from("App:Cliente2", "cli")
            ->select("cli");
        if(!empty($nombre)) {
            $arCliente2->where("cli.nombre LIKE '%{$nombre}%'");
        }
        return $arCliente2->getQuery();

 }

//    public function __construct(RegistryInterface $registry)
//    {
//        parent::__construct($registry, Cliente::class);
//    }

//    /**
//     * @return Cliente[] Returns an array of Cliente objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cliente
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}