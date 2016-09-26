<?php
namespace Sushione\Entity;

/**
 * Created by PhpStorm.
 * User: wap48
 * Date: 27/11/15
 * Time: 10:12
 */
class Produit {

    private $id;
    private $nom;
    private $description;
    private $vignette;
    private $prix;
    private $stock;
    private $categorie_id;
    private $typealiment_id;
    private $composition_id;

    /**
     * Produit constructor.
     *
     */
    public function __construct() {

    }

    public function getId() { return $this->id; }

    public function getNom() { return $this->nom; }
    public function setNom($nom) { $this->nom = $nom; }

    public function getDescription() { return $this->description; }
    public function setDescription($description) { $this->description = $description; }

    public function getVignette() { return $this->vignette; }
    public function setVignette($vignette) { $this->vignette = $vignette; }

    public function getPrix() { return $this->prix; }
    public function setPrix($prix) { $this->prix = $prix; }

    public function getStock() { return $this->stock; }
    public function setStock($stock) { $this->stock = $stock; }

    public function getCategorieId() { return $this->categorie_id; }
    public function setCategorieId($categorie_id) { $this->categorie_id = $categorie_id; }

    public function getTypealimentId() { return $this->typealiment_id; }
    public function setTypealimentId($typealiment_id) { $this->typealiment_id = $typealiment_id; }

    public function getCompositionId() { return $this->composition_id; }
    public function setCompositionId($composition_id) { $this->composition_id = $composition_id; }

}