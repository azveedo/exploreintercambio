<?php

use Application\core\Controller;
use Application\models\User;
use Application\utils\Env;

class Cadastro extends Controller
{
  public function index()
  {
    $this->view('cadastro/index',['' => ''], 'cadastro', false);
  }

  // public function sucesso() {
  //   $this->view('sucesso');
  // }

  // public function erro() {
  //   $this->view('erro');
  // }

  public function criar(){
    $User = $this->model('User');
    
    $registeringUser = array(
      'nome' => addslashes($_POST['usuario']),
      'email' => addslashes($_POST['email']),
      'senha' => addslashes($_POST['senha']),
      'telefone' => addslashes($_POST['telefone']),
      'pais' => addslashes($_POST['pais']),
      'estado' => addslashes($_POST['estado']),
      'cidade' => addslashes($_POST['cidade']),
      'bairro' => addslashes($_POST['bairro']),
      'rua' => addslashes($_POST['rua']),
      'numero' => addslashes($_POST['numero'])
    );

    if(empty($_POST['usuario'])) {
      header('Location: '.Env::baseUrl().'/cadastro');
      die();
    }

    try {
      $User->create($registeringUser);
      $this->view('cadastro/sucesso', [], 'sucesso', false);
    } catch(\Exception $error) {
      $this->view('cadastro/erro', [], 'erro', false);
    }
  }
}