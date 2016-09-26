<?php
/**
 * Created by PhpStorm.
 * User: Renaud
 * Date: 01/04/2016
 * Time: 14:38
 */

namespace Sushione\Entity;


class Admin
{
    private $id = null;
    private $log = null;
    private $mdp = null;

    public function __construct(){
    }

    public function getId(){
        return $this->id;
    }

    public function getLog(){
        return $this->log;
    }

    public function setLog($log){
        $this->log = $log;
    }

    public function getPassword(){
        return $this->mdp;
    }

    public function setPassword($mdp){
        $this->mdp = $mdp;
    }
}