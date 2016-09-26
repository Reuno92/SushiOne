<?php
namespace Sushione\Form;
use Sushione\Entity\UtilisateurRepository;

/**
 * Created by PhpStorm.
 * User: wap48
 * Date: 30/11/15
 * Time: 12:03
 */
class Inscription {
    // Réception des info du formulaire avec un tableau associatif.
    public $infoFormulaire = [
        "nom" => [
            "value" => null,
            "error" => "Vous n'avez pas saisi votre nom."
        ],

        "prenom" => [
            "value" => null,
            "error" => "Vous n'avez pas saisi votre prénom."
        ],

        "email" => [
            "value" => null,
            "error" => "Vous n'avez pas saisi d'adresse mail."
        ],

        "mdp" => [
            "value" => null,
            "error" => "Vous n'avez pas saisi de mot de passe."
        ],

        "telephone" => [
            "value" => null,
            "error" => "Vous n'avez pas saisi de numéro de téléphone."
        ],

        "adresse" => [
            "value" => null,
            "error" => "Vous n'avez pas saisi d'adresse."
        ],

        "code_postale" => [
            "value" => null,
            "error" => "Vous n'avez pas saisi de code postale."
        ],

        "ville" => [
            "value" => null,
            "error" => "Vous n'avez pas saisi de ville."
        ]
    ];

    public $message = null;

    // Constructeur qui appelle les fonctions remplissage formulaire et vérifie les existences du tableau associatif $_POST['inscriptsubmit']
    public function __construct(){
        $this -> remplissageForm();

        if(isset($_POST['inscriptsubmit'])){
            $this -> check();
        }
    }

    private function remplissageForm(){
        // Si le champs n'est pas vide (!empty), dans le champs nommée 'nom'
        if (!empty($_POST['nom'])){
            $this -> infoFormulaire['nom']['value'] = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
        }

        if (!empty($_POST['prenom'])){
            $this -> infoFormulaire['prenom']['value'] = filter_var($_POST['prenom'], FILTER_SANITIZE_STRING);
        }

        if (!empty($_POST['email'])){
            $this -> infoFormulaire['email']['value'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        }

        if (!empty($_POST['mdp'])){
            $this -> infoFormulaire['mdp']['value'] = filter_var($_POST['mdp'], FILTER_SANITIZE_STRING);
        }

        if (!empty($_POST['telephone'])){
            $this -> infoFormulaire['telephone']['value'] = filter_var($_POST['telephone'], FILTER_SANITIZE_STRING);
        }

        if (!empty($_POST['adresse'])){
            $this -> infoFormulaire['adresse']['value'] = filter_var($_POST['adresse'], FILTER_SANITIZE_STRING);
        }

        if (!empty($_POST['code_postale'])){
            $this -> infoFormulaire['code_postale']['value'] = filter_var($_POST['code_postale'], FILTER_SANITIZE_STRING);
        }

        if (!empty($_POST['ville'])){
            $this -> infoFormulaire['ville']['value'] = filter_var($_POST['ville'], FILTER_SANITIZE_STRING);
        }

    }

    private function check() {
        /* filter_input_array : fonction utiliset pour récupérer plusieurs valeurs sans avoir à appeler plusieurs fois la fonction.
        *  filter_input_array(INPUT_POST ou INPUT_GET ou INPUT_COOKIE ou INPUT_SERVER [ clé => valeur ]
        *  valeur sont ['filter' => Filtre de nettoyage PhP, flag => [this, function]],
        *
        *  FILTER_SANITIZE_ENCODED : Applique l'encodage URL, et supprime ou encode les caractères spéciaux.
        *  FILTER_SANITIZE_STRING : Supprime les balises, et supprime ou encode les caractères spéciaux.
        *  FILTER_CALLBACK : appelle une fonction définie par le développeur pour filtrer la valeur.
        *
        */
        $validation = filter_input_array(INPUT_POST, [
            'nom' => ['filter' => FILTER_SANITIZE_STRING],
            'prenom' => ['filter' => FILTER_SANITIZE_STRING],
            'email' => ['filter' => FILTER_CALLBACK, 'options' => [$this, 'checkEmail']],
            'mdp' => ['filter' => FILTER_SANITIZE_STRING],
            'telephone' => ['filter' => FILTER_SANITIZE_STRING],
            'adresse' => ['filter' => FILTER_SANITIZE_STRING],
            'code_postale' => ['filter' => FILTER_SANITIZE_STRING],
            'ville' => ['filter' => FILTER_SANITIZE_STRING],
        ]);
        //Retourne les valeurs après les avoir filter.

        foreach ($validation as $key => $value) {
            //Si il n'y a pas de valeur dans la propriété $value
            if (!$value) {
                // Ce message est égale à
                $this->message .= '<p class="novalid">'.$this->infoFormulaire[$key]['error'] . '</p>';
            }
        }

    //
        if (empty ($this -> message) ) {
            $this->isvalid();
        }
    }

    // Fonction de vérification de mail
    public function checkEmail($value){
        // expression régulière.
        $regexp = '#^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,}$#';
        // vérifier avec un preg_match qui effectue une correspondance entre le patern $regexp et la variable $value
        if(preg_match($regexp, $value)){
            return true;
        }
        else{
            return false;
        }
    }

    // Fonction de estvalide affiche un message et envoi dans la class dépôt utilisateur.
    private function isValid(){
        $this->message = 'Formulaire valide';
        $utilisateurRepository = new UtilisateurRepository();
        $utilisateurRepository->add($this->infoFormulaire);
    }

}
