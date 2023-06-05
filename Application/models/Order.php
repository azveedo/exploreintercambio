<?php

namespace Application\models;

use Application\core\Database;

class Order
{
    public function create($idUser, $idCurso, $nomeCurso)
    {
        $connection = new Database();

        $result = $connection->executeQuery(
            "INSERT INTO ordens (idUser, idCurso, nomeCurso) VALUES (:user, :idCurso, :nomeCurso)",
            [
                ":user" => $idUser,
                ":idCurso" => $idCurso,
                ":nomeCurso" => $nomeCurso
            ]
        );

        return $result->fetch(\PDO::FETCH_ASSOC);
    }

    public function findUserOrders($idUser) {
        $connection = new Database();

        $result = $connection->executeQuery("SELECT * from ordens WHERE idUser = :idUser", [
            ":idUser" => $idUser
        ]);

        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
}
