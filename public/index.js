import "./assets/css/style.scss";

import {
  createParallax,
  animateMenu,
  collapseFaq,
  createCarousel,
  mostraSenha,
  formValidation,
} from "./components";
import { selectors } from "./config/selectors";

function runApp() {
  createParallax();
  animateMenu(selectors.btnMobile);
  collapseFaq();
  createCarousel();
  mostraSenha();
  formValidation();
}

document.addEventListener("DOMContentLoaded", runApp);
