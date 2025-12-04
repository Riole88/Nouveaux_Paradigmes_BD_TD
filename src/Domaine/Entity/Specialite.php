<?php

namespace toubeelib\praticien\Domaine\Entity;

class Specialite
{
    private int $id;
    private string $libelle;
    private ?string $description = null;

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
}