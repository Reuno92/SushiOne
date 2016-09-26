<?php
namespace Sushione\Entity;

/**
 * Created by PhpStorm.
 * User: wap48
 * Date: 30/11/15
 * Time: 09:09
 */
class TypeAliment
{

    private $id =null;
    private $nom = null;

    /**
     * TypeAliment constructor.
     */
    public function __construct()
    {
    }

    public function getId() { return $this->id; }


    public function getNom() { return $this->nom; }
    public function setNom($nom) { $this->nom = $nom; }


}