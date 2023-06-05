<?php

use Application\core\Controller;
use Application\models\Depoiment;

class Home extends Controller
{


  public function index()
  {
      
    $Testimony = new Depoiment();
    $testimonials = $Testimony::findLast(2);

    $this->view('home/index', ['testimonials' => $testimonials], 'home', true);
  }



}