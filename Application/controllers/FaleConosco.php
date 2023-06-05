<?php

use Application\core\Controller;

class FaleConosco extends Controller
{
  public function index()
  {
    $this->view('faleConosco/index', [''], 'faleConosco');
  }
}