<?php
/**
 * Created by PhpStorm.
 * User: Renaud
 * Date: 01/04/2016
 * Time: 14:35
 */

namespace Sushione\Form;
use Sushione\Entity\AdminRepository;

class Log_Admin {

    public $log = null;
    public $mdp = null;

    public $infoLogAdmin = [
        "id" => [
            "value" => null,
        ],

        "log" => [
            "value" => null,
        ],

        "mdp" => [
            "value" => null,
            "error" => "Mauvais Mot de passe"
        ]
    ];

    public $messageConnexion = null;

    public function __construct() {
        $this->remplissageConnexionLogAdmin();

        if(isset($_POST['connexsubmit'])){
            $this -> check();
        }
    }

    private function remplissageConnexionLogAdmin(){
        if (!empty($_POST['log'])){
            $this -> infoLogAdmin['email']['value'] = filter_var($_POST['log'], FILTER_SANITIZE_EMAIL);
        }

        if (!empty($_POST['mdp'])){
            $this -> infoLogAdmin['mdp']['value'] = filter_var($_POST['mdp'], FILTER_SANITIZE_STRING);
        }
    }

    public function check() {
        $logAdminRepository = new AdminRepository();

        $hash =  $logAdminRepository->getHash($this->infoLogAdmin['log']['value']);

        $this->mdp = password_verify(
            $this->infoLogAdmin['mdp']['value'],
            $hash['mdp']
        );

        if ($this -> mdp) {
            $this->isvalid();
        } else {
            $this->messageConnexion .= '<p class="novalid">'.$this->infoLogAdmin['mdp']['error'] . '</p>';
        }
    }

    public function isValid()
    {
        $bdd = new AdminRepository();

        $connexionInfo = $bdd->getInfo( $this -> infoLogAdmin['log']['value'] );
        $_SESSION['admin']['log'] = $connexionInfo['log'];
        header('location: home.php');
    }



}