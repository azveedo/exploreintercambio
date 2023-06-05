<?php

use Application\core\Controller;

class QuemSomos extends Controller
{


  public function index()
  {
    $this->view('quemSomos/index', [''], 'quemSomos');
  }



}