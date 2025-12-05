<?php

namespace toubeelib\praticien\core\Domaine\Entity;

use Doctrine\Common\Collections\Collection;

class Specialite
{
    private int $id;
    private string $libelle;
    private ?string $description = null;
    private Collection $motifsVisite;

    public function __construct(string $libelle, string $description){
        $this->libelle = $libelle;
        $this->description = $description;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getMotifsVisite(): Collection
    {
        return $this->motifsVisite;
    }

    public function addMotifVisite(MotifVisite $motifVisite): self
    {
        if (!$this->motifsVisite->contains($motifVisite)) {
            $this->motifsVisite[] = $motifVisite;
            $motifVisite->setSpecialite($this);
        }
        return $this;
    }

    public function removeMotifVisite(MotifVisite $motifVisite): self
    {
        if ($this->motifsVisite->removeElement($motifVisite)) {
            // Optionnel : gérer la suppression de la relation inverse
        }
        return $this;
    }
}