export function formValidation(){
    const formRegister = document.getElementById('formRegister');
const username = document.getElementById('usuario');
const email = document.getElementById('email');
const password = document.getElementById('senha');
const phone = document.getElementById('telefone');
const state = document.getElementById('estado');
const city = document.getElementById('cidade');
const street = document.getElementById('rua');
const neighborhood = document.getElementById('bairro');
const number = document.getElementById('numero');


formRegister.addEventListener('submit', e => {
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

const letters = /^[a-zA-Z]$/;


const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const phoneValue = phone.value.trim();
    const stateValue = state.value.trim();
    const cityValue = city.value.trim();
    const streetValue = street.value.trim();
    const neighborhoodValue = neighborhood.value.trim();
    const numberValue = number.value.trim();

    if(usernameValue === '') {
        setError(username, 'Nome é obrigatório!');
    } else {
        setSuccess(username);
    }

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

    if(phoneValue === '') {
        setError(phone, 'Telefone é obrigatório!');
    } else if (phoneValue.length <= 10) {
        setError(phone, 'Insira um telefone válido!');
    } else {
        setSuccess(phone);
    }

    if(stateValue === '') {
        setError(state, 'Estado é obrigatório!');
    } else {
        setSuccess(state);
    }

    if(cityValue === '') {
        setError(city, 'Cidade é obrigatório!');
    } else {
        setSuccess(city);
    }

    if(streetValue === '') {
        setError(street, 'Rua é obrigatório!');
    } else {
        setSuccess(street);
    }

      if(neighborhoodValue === '') {
        setError(neighborhood, 'Bairro é obrigatório!');
    } else {
        setSuccess(neighborhood);
    }

    if(numberValue === '') {
        setError(number, 'Número é obrigatório!');
    } else {
        setSuccess(number);
    }

};

}