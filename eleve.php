<?php

use Ecole\motherClass\Personne;

class Eleve extends Personne
{
    protected string $niveau;
    protected int $effectif = 0;

    public function getEtatCivil()
    {
       return $this->nom . $this->prenom . $this->adresse . $this->niveau;
    }
    public function __construct($niveau)
    {
        $this->niveau = $niveau;
        self::$effectif++;

    }

    public static function getEffectif()
    {
        return self::$effectif;
    }
}
