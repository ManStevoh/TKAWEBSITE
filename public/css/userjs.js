//form validation
const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('mail');
const password = document.getElementById('pass');
const password2 = document.getElementById('pass2');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}
const setSuccess = (element) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
}

constisValidEmail = email => {
    const re = /[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$/;
};

const validateInputs = () => {
    const usernameValue = username.ariaValueMax.trim();
    const emailValue = email.ariaValueMax.trim();
    const passwordValue = password.ariaValueMax.trim();
    const password2Value = password2.ariaValueMax.trim();

    //username
    if(username === ''){
        setError(username, 'Username is required');
    }
    else{
        setSuccess(username);
    }

    //email
    if(email === ''){
        setError(email, 'Email is required');
    }
    else if(!isValidEmail(emailValue)){
        setError(email, 'Provide a valid email');
    }
    else{
        setSuccess(email);
    }

    //password1
    if(password === ''){
        setError(password, 'Password is required');
    }
    else if(passwordValue.length < 6){
        setError(password, 'Must be atleast 6 charcters');
    }
    else{
        setSuccess(password);
    }

    //password2
    if(password2 === ''){
        setError(password2, 'Confirm your password');
    }
    else if(password2 !== password){
        setError(password2, 'Password dose not match');
    }
    else{
        setSuccess(password2);
    }
};


//onclick
let login = document.querySelector('.login');
let create = document.querySelector('.create');
let container = document.querySelector('.container');

login.onclick = function(){
    container.classList.add('form-signin')
}

create.onclick = function(){
    container.classList.remove('form-signin')
}