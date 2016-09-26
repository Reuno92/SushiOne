<?php
namespace Sushione\Entity;
use Sushione\Utils\Database;

class UtilisateurRepository
{

    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function add($infoFormulaire)
    {
        /*$nom = $infoFormulaire['nom']['value'];
        $prenom = $infoFormulaire['prenom']['value'];
        $email=$infoFormulaire['email']['value'];
        $telephone=$infoFormulaire['telephone']['value'];
        $adresse=$infoFormulaire['adresse']['value'];
        $code_postale=$infoFormulaire['code_postale']['value'];
        $ville= $infoFormulaire['ville']['value'];
        $mdp=password_hash($infoFormulaire['mdp']['value'], PASSWORD_BCRYPT);

         $sql = '
                 INSERT INTO
                  sushione.utilisateur
                 VALUES
                  (null, "'.$nom.'", "'.$prenom.'", "'.$email.'", "'.$telephone.'", "'.$adresse.'", "'.$code_postale.'", "'.$ville.'", "'.$mdp . '")
                 ';*/


        $sql = '
                INSERT INTO
                 rressourqfreuno.so_utilisateur
                VALUES
                 (null, :nom, :prenom, :email, :telephone, :adresse, :code_postale, :ville, :mdp)
                ';

        $query = $this->connection->prepare($sql);
        $query->execute(
            [
                'nom' => $infoFormulaire['nom']['value'],
                'prenom' => $infoFormulaire['prenom']['value'],
                'email' => $infoFormulaire['email']['value'],
                'telephone' => $infoFormulaire['telephone']['value'],
                'adresse' => $infoFormulaire['adresse']['value'],
                'code_postale' => $infoFormulaire['code_postale']['value'],
                'ville' => $infoFormulaire['ville']['value'],
                'mdp' => password_hash($infoFormulaire['mdp']['value'], PASSWORD_BCRYPT)
            ]
        );

        $result = $query->fetch();
        return $result;
    }

    public function getHash($email) {

        $sql = '
                SELECT
                    so_utilisateur.mdp
                FROM
                    rressourqfreuno.so_utilisateur
                WHERE
                    so_utilisateur.email = :email
                ';
        $query = $this->connection->prepare($sql);
        $query->execute(
            [
                'email' => $email
            ]
        );

        $result = $query->fetch();
        return $result;
    }

        public function getInfo($email)
        {

        $sql = '
           SELECT
               so_utilisateur.id,
               so_utilisateur.nom,
               so_utilisateur.prenom,
               so_utilisateur.adresse,
               so_utilisateur.code_postale,
               so_utilisateur.ville,
               so_utilisateur.telephone
           FROM
               rressourqfreuno.so_utilisateur
           WHERE
               so_utilisateur.email = :email
           ';

        $query = $this->connection->prepare($sql);
        $query->execute(
                [
                'email' => $email
                ]
        );

        $connex = $query->fetch();
        return $connex;
    }

    public function getProfil($id) {
        $sql = '
                SELECT
                    so_utilisateur.id,
                    so_utilisateur.prenom,
                    so_utilisateur.nom,
                    so_utilisateur.email,
                    so_utilisateur.mdp,
                    so_utilisateur.telephone,
                    so_utilisateur.adresse,
                    so_utilisateur.code_postale,
                    so_utilisateur.ville
                FROM
                    rressourqfreuno.so_utilisateur
                WHERE
                    so_utilisateur.id = :id
               ';
        $query = $this->connection->prepare($sql);
        $query->execute(
            [
                'id' => $id
            ]
        );

        $resultProfil = $query->fetch(\PDO::FETCH_ASSOC);
        return $resultProfil;
    }

    public function setProfil($email) {
        $sql = '
                UPDATE
                    so_utilisateur.prenom,
                    so_utilisateur.nom,
                    so_utilisateur.email,
                    so_utilisateur.mdp,
                    so_utilisateur.telephone,
                    so_utilisateur.adresse,
                    so_utilisateur.code_postale,
                    so_utilisateur.ville
                SET
                    prenom = :prenom,
                    nom = :nom,
                    email = :email,
                    mdp = :mdp,
                    telephone = :telephone,
                    adresse = :adresse,
                    code_postale = :code_postale,
                    ville = :ville

              ';
        $query = $this->connection->prepare($sql);
        $query->execute(
          [
                'email' => $email
          ]
        );
        $requeteProfil = $query->fetch(\PDO::FETCH_ASSOC);
        return $requeteProfil;
    }

}