<?php

namespace Application\core;

class Database
{
    // configuração do banco de dados
    private $DB_NAME = "explo991_explore";
    private $DB_USER = "explo991_expl";
    private $DB_PASSWORD = "8eFcdd243$#GGfnU0";
    private $DB_HOST = "localhost";
    private $DB_PORT = 3306;

    // armazena a conexão
    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new \PDO(
                "mysql:dbname=$this->DB_NAME;host=$this->DB_HOST;port=$this->DB_PORT;user=$this->DB_USER;password=$this->DB_PASSWORD"
            );
        } catch (\Exception $e) {
            echo "ERRO não passou da conexão: " . $e->getMessage();
            exit();
        }

        // Quando essa classe é instanciada, é atribuido a variável $connection a conexão com o db
    }

    /**
     * Este método recebe um objeto com a query 'preparada' e atribui as chaves da query
     * seus respectivos valores.
     * @param  PDOStatement  $stmt   Contém a query ja 'preparada'.
     * @param  string        $key    É a mesma chave informada na query.
     * @param  string        $value  Valor de uma determinada chave.
     */
    private function setParameters($stmt, $key, $value)
    {
        $stmt->bindParam($key, $value);
    }

    /**
     * A responsabilidade deste método é apenas percorrer o array de com os parâmetros
     * obtendo as chaves e os valores para fornecer tais dados para setParameters().
     * @param  PDOStatement  $stmt         Contém a query ja 'preparada'.
     * @param  array         $parameters   Array associativo contendo chave e valores para fornece a query
     */
    private function mountQuery($stmt, $parameters)
    {
        foreach ($parameters as $key => $value) {
            $this->setParameters($stmt, $key, $value);
        }
    }

    /**
     * Este método é responsável por receber a query e os parametros, preparar a query
     * para receber os valores dos parametros informados, chamar o método mountQuery,
     * executar a query e retornar para os métodos tratarem o resultado.
     * @param  string   $query       Instrução SQL que será executada no banco de dados.
     * @param  array    $parameters  Array associativo contendo as chaves informada na query e seus respectivos valores
     *
     * @return PDOStatement
     */
    public function executeQuery(string $query, array $parameters = [])
    {
        $stmt = $this->connection->prepare($query);
        $this->mountQuery($stmt, $parameters);
        $stmt->execute();
        return $stmt;
    }
}
