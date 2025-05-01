function validateLogin() {
    var email = document.getElementById('email').value.trim();
    var password = document.getElementById('password').value;
    var roleSelected = document.querySelector('input[name="role"]:checked');
  
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
    if (email === "") {
      alert("Please enter your email address.");
      return false;
    }
  
    if (!emailPattern.test(email)) {
      alert("Invalid email format.");
      return false;
    }
  
    if (password.length < 6) {
      alert("Password must be at least 6 characters.");
      return false;
    }
  
    if (!roleSelected) {
      alert("Please select a role (Admin or Customer).");
      return false;
    }
  
    window.location.href = "dashboard.html"; 
    return false;
  }
  
  function toggleLoginPassword() {
    var input = document.getElementById('password');
    input.type = input.type === "password" ? "text" : "password";
  }
  