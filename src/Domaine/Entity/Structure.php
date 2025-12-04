<?php

namespace toubeelib\praticien\Domaine\Entity;

class Structure{
    private string $id;
    private string $nom;
    private string $adresse;
    private string $ville;
    private string $code_postal;
    private string $telephone;

    public function __construct(
        string $nom,
        string $adresse,
        string $ville,
        string $code_postal,
        string $telephone
    )
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->code_postal = $code_postal;
        $this->telephone = $telephone;
    }

    //Getter
    public function getId(): string
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function getVille(): string
    {
        return $this->ville;
    }

    public function getCodePostal(): string
    {
        return $this->code_postal;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    //Setter
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    public function setCodePostal(string $code_postal): void
    {
        $this->code_postal = $code_postal;
    }

    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }


}