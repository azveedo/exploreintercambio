<?php

namespace Application\models;

use Application\core\Database;

class User
{
    /** Poderiamos ter atributos aqui */

    /**
     * Este método busca todos os usuários armazenados na base de dados
     *
     * @return   array
     */
    public static function findAll()
    {
        $connection = new Database();
        $result = $connection->executeQuery("SELECT * FROM usuario");
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function validateEmail($email, $connection)
    {
        $result = $connection->executeQuery(
            "select idUser from usuario where emailUser = :email",
            [
                ":email" => $email,
            ]
        );

        if ($result->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function create($user)
    {
        $connection = new Database();

        $userExists = $this->validateEmail($user["email"], $connection);

        if ($userExists) {
            throw new \Exception("Email já cadastrado!");
        }

        $result = $connection->executeQuery(
            "INSERT INTO usuario (nomeUser, emailUser, senhaUser, telefoneUser, paisUser, estadoUser, cidadeUser, bairroUser, ruaUser, numeroUser) VALUES (:nome, :email, :senha, :telefone, :pais, :estado, :cidade, :bairro, :rua, :numero)",
            [
                ":nome" => $user["nome"],
                ":email" => $user["email"],
                ":senha" => $user["senha"],
                ":telefone" => $user["telefone"],
                ":pais" => $user["pais"],
                ":estado" => $user["estado"],
                ":cidade" => $user["cidade"],
                ":bairro" => $user["bairro"],
                ":rua" => $user["rua"],
                ":numero" => $user["numero"],
            ]
        );

        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function entrar($email, $password)
    {
        $connection = new Database();

        $result = $connection->executeQuery(
            "select idUser, emailUser, nomeUser from usuario where emailUser = :email and senhaUser = :senha",
            [
              ":email" => $email,
              ":senha" => $password
            ]
        );

        if ($result->rowCount() > 0) {
            session_start();
            $user = $result->fetch(\PDO::FETCH_ASSOC);

            setcookie("_explore_session", json_encode($user), time() + (86400 * 30), "/");

            return true;
        } else {
            throw new \Exception('Usuário não encontrado, por favor tente novamente.');
        }
    }

    /**
     * Este método busca um usuário armazenados na base de dados com um
     * determinado ID
     * @param    int     $id   Identificador único do usuário
     *
     * @return   array
     */
    public static function findById(int $id)
    {
        $connection = new Database();
        $result = $connection->executeQuery(
            "SELECT * FROM usuario WHERE idUser = :ID LIMIT 1",
            [
                ":ID" => $id,
            ]
        );

        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
}
