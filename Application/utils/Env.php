<?php

namespace Application\utils;

class Env {
  public static function isLocalhost(){
    return $_SERVER["SERVER_NAME"] == 'localhost';
  }

  public static function baseUrl() {
    return Env::isLocalHost() ? 'http://localhost:8888/explore-php' : 'https://exploreintercambio.com';
  }

  public static function loggedUser() {
    $loggedUser = json_decode($_COOKIE["_explore_session"]);
    if(!empty($loggedUser) && $loggedUser->idUser) {
      return $loggedUser;
    }
  }

  public static function hasLoggedUser() {
    return !empty(Env::loggedUser());
  }
}