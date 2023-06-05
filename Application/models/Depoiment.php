<?php

namespace Application\models;

use Application\core\Database;

class Depoiment
{
public static function findAll(){
    $connection = new Database();
    $result = $connection->executeQuery('SELECT * FROM depoimentos');
 
    return $result->fetchAll(\PDO::FETCH_ASSOC);
}

  public static function findLast($limit = 1){
     $connection = new Database();
     $result = $connection->executeQuery("SELECT * FROM depoimentos WHERE idDepoimento ORDER BY RAND() LIMIT $limit");
     return $result->fetchAll(\PDO::FETCH_ASSOC);
  }
}