<?php
/**
 * Created by PhpStorm.
 * User: Renaud
 * Date: 10/04/2016
 * Time: 14:35
 */

namespace Sushione\Form;

class VerifVignette
{
    public $inputInfos = [
        "vignette" => [
            "value" => null,
            "error" => '<p class="novalid">Vous n\'avez pas sélectionné de fichier.</p>'
        ],

    ];

    private $extensions = [
        'image/gif' => 'gif',
        'image/jpeg' => 'jpg',
        'image/png' => 'PNG',
        'image/svg+xml' => 'svg'
    ];

    public $message = null;

    private $maxMoSize = 1;

    public function __construct() {
        $this -> fillInputs();

        // ATTENTION entre string doit être la valeur Name de l'input
        if(isset($_POST['vignette'])){
            $this -> check();
        }
    }

    private function fillInputs() {

        /* $_FILES[name du champ] :
                - name : nom original du fichier transféré
                - type : type MIME du fichier
                - tmp-name : nom temporaire du fichier sur le serveur
                - error : 0 > pas d'erreur / 4 > erreur
                - size : Poids en octets (1k > 1024 octets)

            actions recommandées :
                - Renommer aléatoirement les fichiers : GetName
                - Spécifier les extensions acceptées : extensions
                - Vérifier si l'extension est acceptée : checkExtension
                - Récupération de l'extention selon le type MIME : getExtension
                - Vérifier le poids : checkSize
        */

        /*if(!empty($_FILES['vignette'])){
            $tempName = $_FILES['vignette']['tmp_name'];
            $this->inputInfos['vignette']['value'] = filter_var($_FILES['fichier']['name'], FILTER_SANITIZE_STRING);
        }*/

        /*private function getExtension($paramTempName) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimeType = finfo_file($finfo, $paramTempName);
            return $this->extensions[$mimeType];
        }*/

    }

}