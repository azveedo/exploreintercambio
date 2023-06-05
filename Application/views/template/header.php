<?php 
  use Application\utils\Env;
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>explore.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo Env::baseUrl(); ?>/public/dist/index.css" />
</head>

<body class="<?php echo $bodyClass ?>">
  <div class="rellax parallax-el" data-rellax-speed="1"></div>
  <div class="rellax text" data-rellax-speed="5"></div>
  <div class="rellax clouds" data-rellax-speed="3"></div>
  <div class="rellax mouse-scroll" data-rellax-speed="-3"></div>
  <div class="whitespace"></div>
  <header>
    <nav>
      <div class="container1">
        <div class="menu-container">
          <div class="menu">
            <div class="menu-shrink">
              <div class="menu-left"> ✦ <div class="menu-brand">explore.</div>
              </div>
              <div id="menu-center" role="menu">
                <a href="https://exploreintercambio.com/">pagina inicial</a>
                <a href="https://exploreintercambio.com/#cards-packs">pacotes</a>
                <a href="<?php echo Env::baseUrl(); ?>/quemSomos">nós</a>
                <a href="<?php echo Env::baseUrl(); ?>/login" class="account">minha conta </a>
              </div>
              <div class="menu-right">
                <div id="menu-toggle-btn">
                  <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu-center"
                    aria-expanded="false">Menu <span id="hamburguer"></span>
                  </button>
                </div>
                <a href="<?php echo Env::baseUrl(); ?>/login" class="account">minha conta </a>
              </div>
            </div>
            <div class="menu-expand">
              <span class="divider"></span>
              <div class="row-1">
                <span>agência de</span>
                <p>intercambio feita para você!</p>
              </div>
              <div class="row-2">
                <p>se junte a nós</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </header>