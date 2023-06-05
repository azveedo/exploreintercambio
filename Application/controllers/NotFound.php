<?php

use Application\core\Controller;
use Application\utils\Env;

class NotFound extends Controller
{
  public function index()
  {
    $this->view('not-found/index', [], 'not-found', false);
  }

}