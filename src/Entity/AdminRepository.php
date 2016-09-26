<?php
namespace Sushione\Entity;
use Sushione\Utils\Database;


class AdminRepository
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function getInfo($log)
    {

        $sql = '
           SELECT
               so_admin.id,
               so_admin.log,
               so_admin.mdp
           FROM
               rressourqfreuno.so_admin
           WHERE
               so_admin.log = :log
           ';

        $query = $this->connection->prepare($sql);
        $query->execute(
            [
                'log' => $log
            ]
        );
    }

    public function getHash($log) {

        $sql = '
                SELECT
                    so_admin.mdp
                FROM
                    rressourqfreuno.so_admin
                WHERE
                    so_utilisateur.log = :log
                ';
        $query = $this->connection->prepare($sql);
        $query->execute(
            [
                'log' => $log
            ]
        );

        $result = $query->fetch();
        return $result;
    }

}