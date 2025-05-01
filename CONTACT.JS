function validateContactForm() {
    var name = document.getElementById("name").value.trim();
    var email = document.getElementById("email").value.trim();
    var subject = document.getElementById("subject").value.trim();
    var message = document.getElementById("message").value.trim();
    var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  
    if (name === "") {
      alert("Please enter your name.");
      return false;
    }
  
    if (email === "") {
      alert("Please enter your email.");
      return false;
    }
  
    if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      return false;
    }
  
    if (subject === "") {
      alert("Please enter a subject.");
      return false;
    }
  
    if (message === "") {
      alert("Please enter your message.");
      return false;
    }
  
    alert("Message sent successfully!");
    return true;
  }
  