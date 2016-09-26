<?php
namespace Sushione\Utils;

/**
 * Created by PhpStorm.
 * User: wap48
 * Date: 27/11/15
 * Time: 09:53
 */
class Database {
    private $pdo;

    public function __construct(){
        $this->pdo = new \PDO('mysql:host=localhost; dbname=rressourqfreuno; charset=utf8', 'root', '');
    }

    public function connect(){
        return $this->pdo;
    }
}