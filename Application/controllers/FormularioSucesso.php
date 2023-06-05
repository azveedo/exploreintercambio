<?php

use Application\core\Controller;

class FormularioSucesso extends Controller
{
  public function index()
  {
    $this->view('formularioSucesso/index', [''], 'formularioSucesso', false);
  }



}