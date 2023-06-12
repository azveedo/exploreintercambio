export function formValidationLogin(){
  const formLogin = document.getElementById('formLogin');
const email = document.getElementById('usuario');
const password = document.getElementById('senha');

formLogin.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    if(emailValue === '') {
        setError(email, 'Email é obrigatório!');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Insira um email válido!');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'Senha é obrigatório!');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Senha deve contar pelo menos 8 caracteres!')
    } else {
        setSuccess(password);
    }
};

}
