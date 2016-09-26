<?php
namespace Sushione\Entity;

/**
 * Created by PhpStorm.
 * User: wap48
 * Date: 30/11/15
 * Time: 09:14
 */
class Utilisateur
{

    private $id = null;
    private $nom = null;
    private $prenom = null;
    private $email = null;
    private $telephone = null;
    private $adresse = null;
    private $code_postale = null;
    private $ville = null;
    private $mdp =  null;

    public function __construct() {
    }

    public function getId() { return $this->id; }

    public function getNom() { return $this->nom; }
    public function setNom($nom) { $this->nom = $nom; }

    public function getPrenom() { return $this->prenom; }
    public function setPrenom($prenom) { $this->prenom = $prenom; }

    public function getEmail() { return $this->email; }
    public function setEmail($email) { $this->email = $email; }

    public function getTelephone() { return $this->telephone; }
    public function setTelephone($telephone) { $this->telephone = $telephone; }

    public function getAdresse() { return $this->adresse; }
    public function setAdresse($adresse) { $this->adresse = $adresse; }

    public function getCodePostale() { return $this->code_postale; }
    public function setCodePostale($code_postale) { $this->code_postale = $code_postale; }

    public function getVille() { return $this->ville; }
    public function setVille($ville) { $this->ville = $ville; }

    public function getMdp() { return $this->mdp; }
    public function setMdp($mdp) { $this->mdp = $mdp; }

}