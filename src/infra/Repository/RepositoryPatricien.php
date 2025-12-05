<?php

namespace toubeelib\praticien\infra\Repository;

use Doctrine\ORM\EntityRepository;
use toubeelib\praticien\core\RepositoryInterface\InterfaceRepositoryPatricien;

class RepositoryPatricien extends EntityRepository implements InterfaceRepositoryPatricien
{

}
