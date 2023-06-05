<?php
namespace Application\core;

$test = 'test';

/**
 * Esta classe é responsável por obter da URL o controller, método (ação) e os parâmetros
 * e verificar a existência dos mesmo.
 */
class App
{
  protected $controller = 'Home';
  protected $method = 'index';
  protected $page404 = false;
  protected $params = [];
  // Método construtor
  public function __construct()
  {
    $URL_ARRAY = $this->parseUrl();
    $this->getControllerFromUrl($URL_ARRAY);
    $this->getMethodFromUrl($URL_ARRAY);
    $this->getParamsFromUrl($URL_ARRAY);
    
    // // chama um método de uma classe passando os parâmetros
    call_user_func_array([$this->controller, $this->method], $this->params);
  }
  /**
   * Este método pega as informações da URL (após o dominio do site) e retorna esses dados
   *
   * @return array
   */
  private function parseUrl()
  {
    $REQUEST_URI = explode('/', substr(filter_input(INPUT_SERVER, 'REQUEST_URI'), 1));

    return $REQUEST_URI;
  }
  /**
   * @param  array  $url   Array contendo informações ou não do controlador, método e parâmetros
   */
  private function getControllerFromUrl($url)
  {
      $controller = $url[0];
      if (!empty($controller) && isset($controller)) {
      $controller = rtrim($controller,"/");
       if (file_exists('./Application/controllers/' . ucfirst($controller) . '.php')) {
           
        $this->controller = ucfirst($controller);
      } else {
        $this->page404 = true;
        $this->controller = 'NotFound';
      }
    }
    
    require './Application/controllers/' . $this->controller . '.php';
    
    $this->controller = new $this->controller();
  }
  /**
   * @param  array  $url   Array contendo informações ou não do controlador, método e parâmetros
   */
  private function getMethodFromUrl($url)
  {
      if (!empty($url[1]) && isset($url[1])) {
      if (method_exists($this->controller, $url[1]) && !$this->page404) {
        $this->method = $url[1];
      } else {
        // caso a classe ou o método informado não exista, o método pageNotFound
        // do Controller é chamado.
        $this->method = 'NotFound';
      }
    }  
  }
  /**
   * @param  array  $url   Array contendo informações ou não do controlador, método e parâmetros
   */
  private function getParamsFromUrl($url)
  {
    if (count($url) > 2) {
      $this->params = array_slice($url, 2);
    }
  }
}