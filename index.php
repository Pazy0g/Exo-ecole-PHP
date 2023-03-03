<?php
require_once "personne.php";
require_once "enseignant.php";
require_once "eleve.php";


$eleve1 = new Eleve();
$eleve2 = new Eleve();
$eleve1->setEtatCivil('Robert', 'Michel', '15 rue général de gaule');

$prof1 = new Enseignant();
$prof1->setEtatCivil('Jacques', 'Brel', '14 rue de la societe');
$prof1->setMatiere('Anglais');
$prof1->getMatiere();

$prof1->getEtatCivil();

Eleve::getEffectif();
