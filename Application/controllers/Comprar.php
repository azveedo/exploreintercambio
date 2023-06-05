<?php

use Application\core\Controller;
use Application\utils\Env;

class Comprar extends Controller {
  public function executar() {
    $idCurso = $_POST["idCurso"];
    $nomeCurso = $_POST["nomeCurso"];

    if(!Env::hasLoggedUser() || empty($idCurso)) {
      header('Location: '.Env::baseUrl().'/');
      die();
    }

    $Order = $this->model('Order');
    $user = Env::loggedUser();

    $Order->create($user->idUser, $idCurso, $nomeCurso);
    
    header('Location: '.Env::baseUrl().'/dashboard');
    die();
  }  
}