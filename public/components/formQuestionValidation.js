export function formQuestionValidation(){
  const formQuestion = document.getElementById('formQuestion');
const username = document.getElementById('nome');
const email = document.getElementById('email');
const phone = document.getElementById('telefone');

formQuestion.addEventListener('submit', e => {
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
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();

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

    if(phoneValue === '') {
        setError(phone, 'Telefone é obrigatório!');
    } else if (phoneValue.length <= 10) {
        setError(phone, 'Insira um telefone válido!');
    } else {
        setSuccess(phone);
    }
};

}