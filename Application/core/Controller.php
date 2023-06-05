<?php

namespace Application\core;

use Application\models\Depoiment;

class Controller
{
  public function model($model)
  {
    require './Application/models/' . $model . '.php';
    $classe = 'Application\\models\\' . $model;
    return new $classe();

  }

  public function view(string $view, $data = [], $bodyClass = '', $renderBaseTemplate = true)
  {
      
    if($renderBaseTemplate){
      require './Application/views/template/header.php';
    } else {
      require './Application/views/template/headerCadastroLogin.php';
    }

    require './Application/views/' . $view . '.php';

    if($renderBaseTemplate){
      require './Application/views/template/footer.php';
    } else {
      require false;
    }
}

  public function pageNotFound()
  {
    $this->view('not-found/index', [], 'not-found', false);
  }
}