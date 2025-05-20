function fNameValidation() {
    const firstName = document.getElementById('name').value.trim();
    const firstNameError = document.getElementById('nameError');
    if (firstName === '') {
        firstNameError.innerHTML = 'First name required';
        firstNameError.style.color = 'red';
        return false;
    } else {
        firstNameError.innerHTML = '';
        return true;
    }
}

function LNameValidation() {
    const lastName = document.getElementById('lastName').value.trim();
    const lastNameError = document.getElementById('lastNameError');
    if (lastName === '') {
        lastNameError.innerHTML = 'Last name required';
        lastNameError.style.color = 'red';
        return false;
    } else {
        lastNameError.innerHTML = '';
        return true;
    }
}

function emailValidation() {
    const email = document.getElementById('email').value.trim();
    const emailError = document.getElementById('emailError');
    if (email === '') {
        emailError.innerHTML = 'Email is required';
        emailError.style.color = 'red';
        return false;
    } else if (!(email.includes('@') && email.includes('.'))) {
        emailError.innerHTML = 'Invalid email';
        emailError.style.color = 'red';
        return false;
    } else {
        emailError.innerHTML = '';
        return true;
    }
}

function passwordValidation() {
    const password = document.getElementById('password').value.trim();
    const passwordError = document.getElementById('passwordError');
    
    if (password === '') {
        passwordError.innerHTML = 'password is requard';
        passwordError.style.color='red';
        return false;
    }
    if (password.length < 8) {
        passwordError.innerHTML = 'Password must be at least 8 characters';
        passwordError.style.color = 'red';
        return false;
    } 
    passwordError.innerHTML = '';
    return true;
}

function validation() {
    return (
        fNameValidation() &&
        LNameValidation() &&
        emailValidation() &&
        passwordValidation()
    );
}