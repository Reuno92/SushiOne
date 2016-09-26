<?php
namespace Sushione\Entity;

class Menu {

    private $id = 'null';
    private $nom = 'null';
    private $prix = 'null';
    private $vignette = 'null';
    private $description = 'null';
    private $categorie_id = 'null';
    private $typealiment_id = 'null';
    private $compostion_id = 'null';

    public function __construction() {

    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param string $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getVignette()
    {
        return $this->vignette;
    }

    /**
     * @param string $vignette
     */
    public function setVignette($vignette)
    {
        $this->vignette = $vignette;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCategorieId()
    {
        return $this->categorie_id;
    }

    /**
     * @param string $categorie_id
     */
    public function setCategorieId($categorie_id)
    {
        $this->categorie_id = $categorie_id;
    }

    /**
     * @return string
     */
    public function getTypealimentId()
    {
        return $this->typealiment_id;
    }

    /**
     * @param string $typealiment_id
     */
    public function setTypealimentId($typealiment_id)
    {
        $this->typealiment_id = $typealiment_id;
    }

    /**
     * @return string
     */
    public function getCompostionId()
    {
        return $this->compostion_id;
    }

    /**
     * @param string $compostion_id
     */
    public function setCompostionId($compostion_id)
    {
        $this->compostion_id = $compostion_id;
    }


}