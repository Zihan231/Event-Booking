// Function to validate the first name
function fNameValidation() {
  const firstName = document.getElementById("firstName").value.trim();
  const firstNameError = document.getElementById("firstNameError");
  if (firstName === "") {
    firstNameError.innerHTML = "First name is required";
    firstNameError.style.color = "red";
    return false;
  } else {
    firstNameError.innerHTML = "";
    return true;
  }
}

// Function to validate the last name
function lNameValidation() {
  const lastName = document.getElementById("lastName").value.trim();
  const lastNameError = document.getElementById("lastNameError");
  if (lastName === "") {
    lastNameError.innerHTML = "Last name is required";
    lastNameError.style.color = "red";
    return false;
  } else {
    lastNameError.innerHTML = "";
    return true;
  }
}

// Function to validate email
function emailValidation() {
  const email = document.getElementById("email").value.trim();
  const emailError = document.getElementById("emailError");
  if (email === "") {
    emailError.innerHTML = "Email is required";
    emailError.style.color = "red";
    return false;
  } else if (!(email.includes("@") && email.includes("."))) {
    emailError.innerHTML = "Email is invalid";
    emailError.style.color = "red";
    return false;
  } else {
    emailError.innerHTML = "";
    return true;
  }
}

// Function to validate password and confirm password
function passwordValidation() {
  const password = document.getElementById("password").value.trim();
  const passwordError = document.getElementById("passwordError");
  const passwordConfirm = document
    .getElementById("confirmPassword")
    .value.trim();
  const confirmPasswordError = document.getElementById("confirmPasswordError");

  if (password === "") {
    passwordError.innerHTML = "Password is required";
    passwordError.style.color = "red";
    return false;
  }
  if (password.length < 8) {
    passwordError.innerHTML = "Password must be at least 8 characters long";
    passwordError.style.color = "red";
    return false;
  } else {
    passwordError.innerHTML = "";
  }

  if (passwordConfirm === "") {
    confirmPasswordError.innerHTML = "Confirm password is required";
    confirmPasswordError.style.color = "red";
    return false;
  }
  if (password !== passwordConfirm) {
    confirmPasswordError.innerHTML = "Passwords do not match";
    confirmPasswordError.style.color = "red";
    return false;
  } else {
    confirmPasswordError.innerHTML = "";
    return true;
  }
}

// Combine all validations
function validationVerification() {
  if (
    fNameValidation() &&
    lNameValidation() &&
    emailValidation() &&
    passwordValidation()
  ) {
    // Allow navigation to emailVarifation.html
    return true;
  } else {
    // Prevent navigation
    return false;
  }
}

// Toggle password visibility
function togglePassword(id) {
  const input = document.getElementById(id);
  input.type = input.type === "password" ? "text" : "password";
}
