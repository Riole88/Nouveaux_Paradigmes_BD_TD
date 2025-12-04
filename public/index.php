<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/bootstrap.php';

use toubeelib\praticien\Domaine\Entity\Praticien;
use toubeelib\praticien\Domaine\Entity\Specialite;
use toubeelib\praticien\Domaine\Entity\Structure;

$specialiteRepository = $entityManager->getRepository(Specialite::class);

$specialiteID1 = $specialiteRepository->find(1);

echo "Excercice 1 <br>";
echo "1) <br>";
if ($specialiteID1) {
    echo "ID: " . $specialiteID1->getId() . "<br>";
    echo "Libellé: " . $specialiteID1->getLibelle() . "<br>";
    echo "Description: " . $specialiteID1->getDescription() . "<br>";
} else {
    echo "Spécialité avec l'ID 1 non trouvée. <br>";
}

$pratricienRepository = $entityManager->getRepository(Praticien::class);
$praticien = $pratricienRepository->find("8ae1400f-d46d-3b50-b356-269f776be532");
echo "<br> 2) <br>";
if ($praticien) {
    echo "ID: " . $praticien->getId() . "<br>";
    echo "Nom: " . $praticien->getNom() . "<br>";
    echo "Prénom: " . $praticien->getPrenom() . "<br>";
    echo "Ville: " . $praticien->getVille() . "<br>";
    echo "Email: " . $praticien->getEmail() . "<br>";
    echo "Téléphone: " . $praticien->getTelephone() . "<br>";
} else {
    echo "Praticien non trouvé. <br>";
}

$praticien2 = $pratricienRepository->find("8ae1400f-d46d-3b50-b356-269f776be532");
echo "<br> 3) <br>";
if ($praticien2) {
    echo "ID: " . $praticien2->getId() . "<br>";
    echo "Nom: " . $praticien2->getNom() . "<br>";
    echo "Prénom: " . $praticien2->getPrenom() . "<br>";
    echo "Ville: " . $praticien2->getVille() . "<br>";
    echo "Email: " . $praticien2->getEmail() . "<br>";
    echo "Téléphone: " . $praticien2->getTelephone() . "<br>";
    $specialite = $praticien2->getSpecialite();
    echo "Spécialité: " . $specialite->getLibelle() . " (ID: " . $specialite->getId() . ")<br>";

    $structure = $praticien2->getStructure();
    if ($structure) {
        echo "Structure: " . $structure->getNom() . " - " . $structure->getVille() . "<br>";
    } else {
        echo "Structure: Aucune structure associée<br>";
    }
} else {
    echo "Praticien non trouvé. <br>";
}

$structureRepository = $entityManager->getRepository(Structure::class);
$structure = $structureRepository->find("3444bdd2-8783-3aed-9a5e-4d298d2a2d7c");
echo "<br> 4) <br>";
if ($structure) {
    echo "Nom: " . $structure->getNom() . "<br>";
    echo "Ville: " . $structure->getVille() . "<br>";
    $praticiens = $structure->getPraticien();
    echo "Praticien: " . $praticiens->getNom() . " " . $praticiens->getPrenom() . "<br>";
} else {
    echo "Structure non trouvé. <br>";
}