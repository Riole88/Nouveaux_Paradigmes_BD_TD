<?php

namespace toubeelib\praticien\core\RepositoryInterface;

interface InterfaceRepositorySpecialite {
    public function getSpecialiteByKeyword(string $keyword): array;
}
