import "./assets/css/style.scss";

import {
  createParallax,
  animateMenu,
  collapseFaq,
  createCarousel,
  mostraSenha,
  formValidation,
  formQuestionValidation,
  formValidationLogin,
} from "./components";
import { selectors } from "./config/selectors";

function runApp() {
  createParallax();
  animateMenu(selectors.btnMobile);
  collapseFaq();
  createCarousel();
  mostraSenha();
  formValidation();
  formQuestionValidation();
  formValidationLogin();
}

document.addEventListener("DOMContentLoaded", runApp);
