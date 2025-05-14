document.getElementById('contact-form').addEventListener('submit', function(e) {
  e.preventDefault();
  const errorDiv = document.getElementById('error');
  const name = document.querySelector('input[name="name"]').value.trim();
  const email = document.querySelector('input[name="email"]').value.trim();
  const subject = document.querySelector('input[name="subject"]').value.trim();
  const message = document.querySelector('textarea[name="message"]').value.trim();

 
  errorDiv.textContent = '';
  errorDiv.style.display = 'none';

  if (!name) {
    errorDiv.textContent = 'Full Name is required.';
    errorDiv.style.display = 'block';
    return;
  }

  if (!email) {
    errorDiv.textContent = 'Email Address is required.';
    errorDiv.style.display = 'block';
    return;
  }

  const atIndex = email.indexOf('@');
  const dotIndex = email.lastIndexOf('.');
  if (atIndex < 1 || dotIndex < atIndex + 2 || dotIndex >= email.length - 1) {
    errorDiv.textContent = 'Please enter a valid email address.';
    errorDiv.style.display = 'block';
    return;
  }

  if (!subject) {
    errorDiv.textContent = 'Subject is required.';
    errorDiv.style.display = 'block';
    return;
  }

  if (!message) {
    errorDiv.textContent = 'Your Message is required.';
    errorDiv.style.display = 'block';
    return;
  }

  console.log('Form validated successfully:', { name, email, subject, message });
});