<?php
    namespace Sushione\Entity;
/**
 * Created by PhpStorm.
 * User: wap48
 * Date: 27/11/15
 * Time: 10:30
 */
class Categorie {

    private $id;
    private $nom;

    public function __construct() {

    }

    public function getId() { return $this->id; }

    public function getNom() { return $this->nom; }
    public function setNom($nom) { return $this->nom = $nom; }

}