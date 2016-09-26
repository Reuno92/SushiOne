<?php
/**
 * Created by PhpStorm.
 * User: wap48
 * Date: 02/12/15
 * Time: 16:13
 */

namespace Sushione\Form;
use Sushione\Entity\UtilisateurRepository;


class Connexion {

    public $login = null;
    public $password = null;

    public $infoConnexion = [
        "id" => [
            "value" => null,
            ],

        "prenom" => [
            "value" => null,
            ],

        "nom" => [
            "value" => null,
            ],

        "email" => [
            "value" => null,
            "error" => "Vous n'avez pas saisi la bonne adresse mail."
            ],

        "mdp" => [
            "value" => null,
            "error" => "Vous n'avez pas saisi le bon mot de passe."
            ],

    ];

    public $messageConnexion = null;

    public function __construct(){
        $this -> remplissageConnexion();

        if(isset($_POST['connexsubmit'])){
            $this -> check();
        }
    }

    private function remplissageConnexion(){
        if (!empty($_POST['email'])){
            $this -> infoConnexion['email']['value'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        }

        if (!empty($_POST['mdp'])){
            $this -> infoConnexion['mdp']['value'] = filter_var($_POST['mdp'], FILTER_SANITIZE_STRING);
        }
    }

    public function check() {
        $utilisateurRepository = new UtilisateurRepository();

        $hash =  $utilisateurRepository->getHash($this->infoConnexion['email']['value']);

        $this->password = password_verify(
            $this->infoConnexion['mdp']['value'],
            $hash['mdp']
        );

        if ($this -> password) {
            $this->isvalid();
        } else {
            $this->messageConnexion .= '<p class="novalid">'.$this->infoConnexion['mdp']['error'] . '</p>';
        }
    }

    public function isValid()
    {
        $bdd = new UtilisateurRepository();

        $this->messageConnexion = 'Bienvenue';
        $connexionInfo = $bdd->getInfo( $this -> infoConnexion['email']['value'] );
        $_SESSION['user']['id'] = $connexionInfo['id'];
        $_SESSION['user']['prenom'] = $connexionInfo['prenom'];
        $_SESSION['user']['nom'] = $connexionInfo['nom'];
        $_SESSION['user']['adresse'] = $connexionInfo['adresse'];
        $_SESSION['user']['code_postale'] = $connexionInfo['code_postale'];
        $_SESSION['user']['ville'] = $connexionInfo['ville'];
        $_SESSION['user']['telephone'] = $connexionInfo['telephone'];
        header('location: index.php');

    }

}