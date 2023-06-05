<?php

use Application\core\Controller;

class idiomaFocoProfissoes extends Controller
{
  public function index()
  {
    $Testimony = $this->model('Depoiment');
    $Package = $this->model('Pack');
    $testimonials = $Testimony::findLast(2);
    $packagesByCategory = $Package::findByCategory('"cursos de curta duração"', 'idiomafocoprofissoes');

     $data = [
      'testimonials' => $testimonials, 
      'pacotes' => $packagesByCategory
     ];

    $this->view('idiomaFocoProfissoes/index', $data, 'idiomaFocoProfissoes');
  }

  public function ver($id = null)
  {
    if (is_numeric($id)) {
      $Packages = $this->model('Pack');
      
      $package = $Packages->findById($id, 'idiomafocoprofissoes');

      $data = [
        'pacote' => $package
      ];

      $this->view('idiomaFocoProfissoes/show', $data, 'details');
    } else {
      $this->pageNotFound();
    }
  }
}