<?php

use Ecole\motherClass\Personne;

class Enseignant extends Personne
{
    protected string $matiere;

    public function getEtatCivil()
    {
       return $this->nom . $this->prenom . $this->adresse . $this->matiere;
    }
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    }

    public function getMatiere()
    {
        return $this->matiere;
    }
}
