<?php

use Ecole\motherClass\Personne;

class Eleve extends Personne
{
    protected string $niveau;
    protected static $effectif = 0;

    public function getEtatCivil()
    {
        return $this->nom . $this->prenom . $this->adresse . $this->niveau;
    }

    public function __construct()
    {
        self::$effectif++;
    }

    public static function getEffectif()
    {
        echo 'Effectif : il y a ' . self::$effectif . ' élèves';
    }
}
