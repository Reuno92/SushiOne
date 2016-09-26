<?php
namespace Sushione\Entity;

/**
 * Created by PhpStorm.
 * User: wap48
 * Date: 27/11/15
 * Time: 10:35
 */
class Commande {

    private $id;
    private $panier;
    private $prix;
    private $date_heure;
    private $utilisateur;

    //initialisation
    public function __construct() {

    }

    //Obtention de la colonne id de la table commande dans la classe Commande
    public function getId() { return $this->id; }

    /*Obtention de la colonne panier de la table commande dans la classe Commande
    Modification de la colonne panier par un paramètre qui a le même nom donc variable $panier = au paramètre $panier */
    public function getPanier() { return $this->panier; }
    public function setPanier($panier) { return $this->panier = $panier; }

    public function getPrix() { return $this->prix; }
    public function setPrix($prix) { return $this->prix = $prix; }

    public function getDate_heure() { return $this->date_heure;}
    public function setDate_heure($date_heure) { return $this->date_heure = $date_heure; }

    public function getUtilisateur() { return $this->utilisateur;}
    public function setUtilisateur($utilisateur) { return $this->utilisateur = $utilisateur; }

}