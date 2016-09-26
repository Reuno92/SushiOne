<?php
namespace Sushione\Entity;

/**
 * Created by PhpStorm.
 * User: wap48
 * Date: 27/11/15
 * Time: 11:20
 */
class Composition {

    private $id = 'null';
    private $nom = 'null';

    public function __construct() {
    }

    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }

    public function getNom() { return $this->nom; }
    public function setNom($nom) { $this->nom = $nom; }

}