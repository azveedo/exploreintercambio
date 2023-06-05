import "./assets/css/style.scss";

import {
  createParallax,
  animateMenu,
  collapseFaq,
  createCarousel,
  mostraSenha,
} from "./components";
import { selectors } from "./config/selectors";

function runApp() {
  createParallax();
  animateMenu(selectors.btnMobile);
  collapseFaq();
  createCarousel();
  mostraSenha();
}

document.addEventListener("DOMContentLoaded", runApp);
