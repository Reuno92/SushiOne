<?php
/**
 * Created by PhpStorm.
 * User: wap48
 * Date: 16/12/15
 * Time: 15:05
 */

namespace Sushione\Form;
use Sushione\Entity\UtilisateurRepository;

class Profil {

    private $requeteInfoProfil;

    public $profil = [
        'prenom' => [
            'value' => null,
            'erreur' => 'Vous n\'avez pas entrer un nouveau prénom'
        ],
        'nom' => [
            'value' => null,
            'erreur' => 'Vous n\'avez pas entrer un nouveau nom'
        ],
        'email' => [
            'value' => null,
            'erreur' => 'Vous n\'avez pas entrer un nouveau email'
        ],
        'telephone' => [
            'value' => null,
            'erreur' => 'Vous n\'avez pas entrer un nouveau numéro de téléphone'
        ],
        'mdp' => [
            'value' => null,
            'erreur' => 'Vous n\'avez pas entrer un nouveau mot de passe'
        ],
        'adresse' => [
            'value' => null,
            'erreur' => 'Vous n\'avez pas entrer une nouvelle adresse'
        ],
        'code_postale' => [
            'value' => null,
            'erreur' => 'Vous n\'avez pas entrer un noveau code postale'
        ],
        'ville' => [
            'value' => null,
            'erreur' => 'Vous n\'avez pas entrer de nouvelle email'
        ],
    ];

    public function __construct() {
        $this->getProfil();
    }

    public $messageProfil = null;

    public function getProfil() {
        $utilisateurRepository = new UtilisateurRepository();

        $this->requeteInfoProfil = $utilisateurRepository->getprofil($_SESSION['user']['id']);

        $this->profil['prenom']['value'] = $this->requeteInfoProfil['prenom'];
        $this->profil['nom']['value'] = $this->requeteInfoProfil['nom'];
        $this->profil['email']['value'] = $this->requeteInfoProfil['email'];
        $this->profil['telephone']['value'] = $this->requeteInfoProfil['telephone'];
        $this->profil['mdp']['value'] = $this->requeteInfoProfil['mdp'];
        $this->profil['adresse']['value'] = $this->requeteInfoProfil['adresse'];
        $this->profil['code_postale']['value'] = $this->requeteInfoProfil['code_postale'];
        $this->profil['ville']['value'] = $this->requeteInfoProfil['ville'];
        var_dump($_SESSION);
    }

    public function setProfil() {



    }



}