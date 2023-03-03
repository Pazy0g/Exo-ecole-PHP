<?php

namespace Ecole\motherClass;

abstract class Personne
{
    protected string $nom;
    protected string $prenom;
    protected string $adresse;

    abstract public function getEtatCivil();

    public function setEtatCivil(string $nom, string $prenom, string $adresse)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
    }
}
