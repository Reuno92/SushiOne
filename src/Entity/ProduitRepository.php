<?php
/**
 * Created by PhpStorm.
 * User: wap48
 * Date: 04/12/15
 * Time: 14:14
 */

namespace Sushione\Entity;

use Sushione\Utils\Database;

class ProduitRepository{

    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function maki() {
        $sql = '
                SELECT
	                so_produit.*,
	                so_categorie.nom AS so_categorie
                FROM
                	rressourqfreuno.so_produit
                JOIN
                	rressourqfreuno.so_categorie
                ON
                	so_categorie.id = so_produit.categorie_id
                AND
                	so_categorie.nom = "maki";
               ';

        /*$maki = $query->fetchAll(\PDO::FETCH_CLASS, '\Sushione\Entity\Produit');*/
        $query = $this->connection->prepare($sql);
        $query->execute();

        $maki = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $maki;
        }

    public function haru() {
        $sql = '
                SELECT
	                so_produit.*,
                    so_categorie.nom  AS so_categorie
                FROM
                	rressourqfreuno.so_produit
                JOIN
                	rressourqfreuno.so_categorie
                ON
                	so_categorie.id = so_produit.categorie_id
                AND
                	so_categorie.nom = "haru";
               ';
        $query = $this->connection->prepare($sql);
        $query->execute();

        $haru = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $haru;
    }



    public function nordique() {
        $sql = '
                SELECT
	                so_produit.*,
                    so_categorie.nom AS so_categorie
                FROM
                	rressourqfreuno.so_produit
                JOIN
                	rressourqfreuno.so_categorie
                ON
                	so_categorie.id = so_produit.categorie_id
                AND
                	so_categorie.nom = "nordique";
               ';
        $query = $this->connection->prepare($sql);
        $query->execute();

        $nordique = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $nordique;
    }

    public function sashimi() {
        $sql = '
                SELECT
	                so_produit.*,
                    so_categorie.nom AS so_categorie
                FROM
                	rressourqfreuno.so_produit
                JOIN
                	rressourqfreuno.so_categorie
                ON
                	so_categorie.id = so_produit.categorie_id
                AND
                	so_categorie.nom = "sashimi";
               ';
        $query = $this->connection->prepare($sql);
        $query->execute();

        $sashimi = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $sashimi;
    }

    public function sushi() {
        $sql = '
                SELECT
	                so_produit.*,
                    so_categorie.nom AS so_categorie
                FROM
                	rressourqfreuno.so_produit
                JOIN
                	rressourqfreuno.so_categorie
                ON
                	so_categorie.id = so_produit.categorie_id
                AND
                	so_categorie.nom = "sushi";
               ';
        $query = $this->connection->prepare($sql);
        $query->execute();

        $sushi = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $sushi;
    }

    public function temaki() {
        $sql = '
                SELECT
	                so_produit.*,
                    so_categorie.nom AS so_categorie
                FROM
                	rressourqfreuno.so_produit
                JOIN
                	rressourqfreuno.so_categorie
                ON
                	so_categorie.id = so_produit.categorie_id
                AND
                	so_categorie.nom = "temaki";
               ';
        $query = $this->connection->prepare($sql);
        $query->execute();

        $temaki = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $temaki;
    }

    public function salade() {
        $sql = '
                SELECT
	                so_produit.*,
                    so_categorie.nom AS so_categorie
                FROM
                	rressourqfreuno.so_produit
                JOIN
                	rressourqfreuno.so_categorie
                ON
                	so_categorie.id = so_produit.categorie_id
                AND
                	so_categorie.nom = "salade";
               ';
        $query = $this->connection->prepare($sql);
        $query->execute();

        $salade = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $salade;
    }

    public function boisson() {
        $sql = '
                SELECT
	                so_produit.*,
                    so_categorie.nom AS so_categorie
                FROM
                	rressourqfreuno.so_produit
                JOIN
                	rressourqfreuno.so_categorie
                ON
                	so_categorie.id = so_produit.categorie_id
                AND
                	so_categorie.nom = "boisson";
               ';
        $query = $this->connection->prepare($sql);
        $query->execute();

        $boisson = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $boisson;
    }

    public function dessert() {
        $sql = '
                SELECT
	                so_produit.*,
                    so_categorie.nom AS so_categorie
                FROM
                	rressourqfreuno.so_produit
                JOIN
                	rressourqfreuno.so_categorie
                ON
                	so_categorie.id = so_produit.categorie_id
                AND
                	so_categorie.nom = "dessert";
               ';
        $query = $this->connection->prepare($sql);
        $query->execute();

        $dessert = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $dessert;
    }

    public function aperitif() {
        $sql = '
                SELECT
	                so_produit.*,
                    so_categorie.nom AS so_categorie
                FROM
                	rressourqfreuno.so_produit
                JOIN
                	rressourqfreuno.so_categorie
                ON
                	so_categorie.id = so_produit.categorie_id
                AND
                	so_categorie.nom = "aperitif";
               ';
        $query = $this->connection->prepare($sql);
        $query->execute();

        $aperitif = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $aperitif;
    }

    public function accompagnement() {
        $sql = '
                SELECT
	                so_produit.*,
                    so_categorie.nom AS so_categorie
                FROM
                	rressourqfreuno.so_produit
                JOIN
                	rressourqfreuno.so_categorie
                ON
                	so_categorie.id = so_produit.categorie_id
                AND
                	so_categorie.nom = "accompagnement";
               ';
        $query = $this->connection->prepare($sql);
        $query->execute();

        $accompagnement = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $accompagnement;
    }

    public function bento()
    {
        $sql = '
                SELECT
	                so_produit.*,
                    so_categorie.nom AS so_categorie
                FROM
                	rressourqfreuno.so_produit
                JOIN
                	rressourqfreuno.so_categorie
                ON
                	so_categorie.id = so_produit.categorie_id
                AND
                	so_categorie.nom = "bento";
               ';
        $query = $this->connection->prepare($sql);
        $query->execute();

        $bento = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $bento;
    }

    public function category() {
        $sql = '
                SELECT so_categorie.nom FROM so_categorie WHERE 1
               ';

        $query = $this->connection->prepare($sql);
        $query->execute();

        $category = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $category;
    }

    public function catParam($respondCat) {

        $sql = '
                SELECT
                so_produit.nom,
                so_produit.description,
                so_produit.vignette,
                so_produit.prix,
                so_produit.stock,
                so_categorie.nom categorie,
                so_composition.nom composition,
                so_typealiment.nom aliment
                FROM
                so_produit
                INNER JOIN so_categorie ON so_produit.categorie_id = so_categorie.id AND so_categorie.nom = :category
                INNER JOIN so_composition ON so_produit.composition_id = so_composition.id
                INNER JOIN so_typealiment ON so_produit.typealiment_id = so_typealiment.id
               ';
        $query = $this->connection->prepare($sql);
        $query->execute(
            [
            ':category' => $respondCat
            ]
        );
        $returnParam = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $returnParam;
    }

    public function addProduct($nom, $desc, $vignette, $prix, $stock, $cat_id, $type_id, $compo_id){
        $sql = "
                INSERT INTO
                    so_produit(nom, description, vignette, prix, stock, categorie_id, typealiment_id, composition_id)
                SELECT
                    :nom, :description, :vignette, :prix, :stock, cat.id, typea.id, compo.id
                FROM
                    so_categorie
                AS  cat,
                    so_typealiment
                AS  typea,
                    so_composition
                AS  compo
                WHERE
                    cat.nom = :catNom
                AND typea.nom = :typeA
                AND	compo.nom = :compo
               ";
        $query = $this->connection->prepare($sql);
        $query->execute(
            [
                ':nom' => $nom,
                ':description' => $desc,
                ':vignette' => $vignette,
                ':prix' => $prix,
                ':stock' => $stock,
                ':cat_id' => $cat_id,
                ':type_id'=> $type_id,
                ':compo_id' => $compo_id
            ]
        );
        $productAdded = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $productAdded;
    }

 /*   public function makiNewProduct() {
        $sql = '
                INSERT INTO
                    rressourqfreuno.so_produit (nom, description, vignette, prix, stock, categorie_id, typealiment_id, composition_id)
                VALUES
                    ('','','','','','','','')
               ';
        $query = $this->connection->prepare($sql);
        $query->execute();
    }*/
}