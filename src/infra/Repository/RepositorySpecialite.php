<?php
namespace toubeelib\praticien\infra\Repository;

use Doctrine\ORM\EntityRepository;
use toubeelib\praticien\core\Domaine\Entity\Specialite;
use toubeelib\praticien\core\RepositoryInterface\InterfaceRepositorySpecialite;

class RepositorySpecialite extends EntityRepository implements InterfaceRepositorySpecialite
{
    public function getSpecialiteByKeyword(string $keyword): array
    {
        $dql = "
            SELECT s
            FROM toubeelib\praticien\core\Domaine\Entity\Specialite s
            WHERE LOWER(s.libelle) LIKE LOWER(:kw)
               OR LOWER(s.description) LIKE LOWER(:kw)
        ";

        return $this->getEntityManager()
            ->createQuery($dql)
            ->setParameter('kw', '%' . $keyword . '%')
            ->getResult();
    }
}
