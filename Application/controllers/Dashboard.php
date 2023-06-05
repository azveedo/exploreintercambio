<?php

use Application\core\Controller;
use Application\models\User;
use Application\utils\Env;

class Dashboard extends Controller
{
  public function index()
  {
    if(Env::hasLoggedUser()) {

      $Order = $this->model("Order");

      $orders = $Order->findUserOrders(Env::loggedUser()->idUser);

      $data = [
        "user" => Env::loggedUser(),
        "orders" => $orders
      ];
      
      return $this->view('dashboard/index', $data, 'dashboard', false);
    }
    $this->view('dashboard/not-authorized', [], 'not-authorized', false);
  }
}