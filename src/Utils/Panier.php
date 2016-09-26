<?php

namespace Sushione\Utils;
use Sushione\Utils\Database;

class Panier
{

    public function __construct()
    {
        $this->creationPanier();
    }

    public function creationPanier()
    {
        // On vérifie si le panier n'existe pas, on le crée avec un tableau associatif
        if (!isset($_SESSION['panier'])) {
            $_SESSION['panier'] = [];
            $_SESSION['panier']['produit'] = [];
            $_SESSION['panier']['quantite'] = [];
            $_SESSION['panier']['prix'] = [];
            $_SESSION['panier']['verrou'] = false;
        }
        return true;
    }

    public function ajouterArticle($produit, $quantite, $prix)
    {
        if ($this->creationPanier() && !$this->isVerouille())
        {
            $positionProduit = array_search($produit, $_SESSION['panier']['produit']);

            if ($positionProduit != false) {
                $_SESSION['panier']['quantite'][$positionProduit] += $quantite;
            }
            else
            {
                array_push($_SESSION['panier']['produit'], $produit);
                array_push($_SESSION['panier']['quantite'], $quantite);
                array_push($_SESSION['panier']['prix'], $prix);
            }
        }

        else
        {
            echo "Un problème est survenu, veuillez nous contacter.";
        }
    }

    public function supprimerArticle($produit)
    {
        //Si le panier existe
        if ($this->creationPanier() && !$this->isVerouille() )
        {
            //Panier temporaire
            $tmp = [];
            $tmp['produit'] = [];
            $tmp['quantite'] = [];
            $tmp['prix'] = [];
            $tmp['verrou'] = $_SESSION['panier']['verrou'];

            for($i = 0; $i < count($_SESSION['panier']['produit']); $i++){
                if ($_SESSION['panier']['produit'][$i] !== $produit) {
                    array_push($tmp['produit'], $_SESSION['panier']['produit'][$i]);
                    array_push($tmp['quantite'], $_SESSION['panier']['quantite'][$i]);
                    array_push($tmp['prix'], $_SESSION['panier']['prix'][$i]);
                }
            }

            // On remplace le panier en session par notre panier temporaire à jour.
            $_SESSION['panier'] = $tmp;
            // On efface notre panier temporaire
            unset($tmp);

        }

        else {
        echo "Un problème est survenu, merci de nous contacter.";
        }
    }

    public function modifierQuantite($produit, $quantite)
    {
        //On vérifie en premier que le panier existe via notre fonction précédente creationPanier()
       if ($this->creationPanier() && !$this->isVerouille() )
       {
            //Si la quantité demandée pour un produit est supérieure à 0 (et accessoirement celui-ci existe mais il a peu de chance qu'on demande la modification d/'un article qui n'existe pas ^^)
            if ($quantite > 0) {
                //recherche du produit dans le panier
                $positionProduit = array_search($produit, $_SESSION['panier']['produit']);

                //on la modifie
                if ($positionProduit !== false) {
                    $_SESSION['panier']['quantite'][$positionProduit] = $quantite;
                }
            } //Si la quantité est négative ou nulle cela revient à dire que l'on supprime l'article !
            else {
                $this->supprimerArticle($produit);
            }
       }

       else {
            echo "Un problème est survenu, merci de nous contacter.";
       }
    }

    public function montantTotal()
    {
        $total = 0;

        for($i = 0; $i < count($_SESSION['panier']['produit']); $i++){
            $total += $_SESSION['panier']['quantite'][$i] * $_SESSION['panier']['prix'][$i];
        }

        $formatTotal = number_format($total, $decimal = 2, "," , $thounsands_separate = " " );
        return $formatTotal;
    }

    public function isVerouille()
    {

        if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou']) {
            return true;
        }

        else {
            return false;
        }

    }

    public function compterArticles() {

        if (isset($_SESSION['panier'])) {
            return count($_SESSION['panier']['produit']);
        }

        else {
            return 0;
        }
    }

}

