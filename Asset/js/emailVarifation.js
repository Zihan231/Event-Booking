function validateOTP() {
  const otpInputs = document.querySelectorAll('.otp-field');
  const otpError = document.getElementById('otpError');
  let isValid = true;

  otpInputs.forEach((input, index) => {
    const value = input.value.trim();
    if (value === '') {
      otpError.innerHTML = 'All OTP fields are required';
      otpError.style.display = 'block';
      isValid = false;
    } else if (value.length !== 1 || !'0123456789'.includes(value)) {
      otpError.innerHTML = `Field ${index + 1} must be a single digit (0-9)`;
      otpError.style.display = 'block';
      isValid = false;
    }
  });

  if (isValid) {
    otpError.innerHTML = '';
    otpError.style.display = 'none';
    return true; 
  }
  return false; 
}

document.querySelectorAll('.otp-field').forEach((input, index, inputs) => {
  input.addEventListener('input', () => {
    if (input.value.length === 1 && index < inputs.length - 1) {
      inputs[index + 1].focus();
    }
  });

  input.addEventListener('keydown', (e) => {
    if (e.key === 'Backspace' && input.value === '' && index > 0) {
      inputs[index - 1].focus();
    }
  });
});