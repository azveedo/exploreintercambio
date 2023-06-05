<?php

namespace Application\models;

use Application\core\Database;

function group_by($key, $array) {
  $result = array();

  foreach($array as $item) {
    if(array_key_exists($key,$item)) {
      $result[$item[$key]][] = $item;
    } else {
      $result[''][] = $item;
    }
  }

  return $result;
}

class Pack
{

  public static function findByCategory($categories, $nameProgram) {
    $connection = new Database();

    $result = $connection->executeQuery("SELECT * from $nameProgram WHERE categoria IN ($categories)");
    $parsedResult = $result->fetchAll(\PDO::FETCH_ASSOC);
    $packagesByCategory = group_by('categoria', $parsedResult);

    return $packagesByCategory;

  }

  public static function findById(int $id, $nameProgram)
  {
    $connection = new Database();
    $result = $connection->executeQuery(
      "SELECT * FROM $nameProgram WHERE idCurso = :ID LIMIT 1",
      array(
        ':ID' => $id
      )
    );

    return $result->fetch(\PDO::FETCH_ASSOC);
  }

}