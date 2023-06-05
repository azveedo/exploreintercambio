<?php

use Application\core\Controller;
use Application\models\User;
use Application\utils\Env;

class Login extends Controller
{
  public function index()
  {
    if(Env::hasLoggedUser()) {
      header('Location: '.Env::baseUrl().'/dashboard');
      die();
    }

    $this->view('login/index',[''], 'login', false);
  }

  public function entrar() {
    $User = $this->model('User');
    
    if(empty($_POST['usuario'])) {
      header('Location: '.Env::baseUrl().'/login');
      die();
    }

    $email = addslashes($_POST['usuario']);
    $password = addslashes($_POST['senha']);

    try {
      $User->entrar($email, $password);
      header('Location: '.Env::baseUrl().'/dashboard');
      die();
    } catch(\Exception $error) {

      $this->view('login/erro', [], 'erro', false);
    }
  }

  public function logout() {
    setcookie("_explore_session", "", time() + (86400 * 30), "/");
    header('Location: '.Env::baseUrl().'/login');
      die();
  }
}