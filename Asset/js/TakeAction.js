function isValid() {
  input = document.getElementById("Search_bar").value;
  if (input === "") {
    document.getElementById("Search_bar_error").innerHTML =
      "Search box cannot be empty";
    return false;
  } else {
    return true;
  }
}
function banUser() {
    const confirmed = confirm("Are you sure you want to ban this user?");
    if (confirmed) {
      console.log("User has been banned.");
      alert("User has been successfully banned.");
    }
  }
  
  
  
  function deleteUser() {
    const confirmed = confirm("⚠️ Are you sure you want to permanently delete this user? This action cannot be undone.");
    if (confirmed) {
      console.log("User deleted permanently.");
      alert("User has been permanently deleted.");
    }
  }
  
  function changeUserRole() {
    const newRole = document.getElementById("changeRole").value;
    const confirmed = confirm(`Are you sure you want to change the user's role to ${newRole}?`);
    if (confirmed) {
      console.log(`User role changed to ${newRole}.`);
      alert(`User's role has been changed to ${newRole}.`);
    }
  }
  
  function sendWarning() {
    const confirmed = confirm("Are you sure you want to send a warning to this user?");
    if (confirmed) {
      console.log("Warning sent to user.");
      alert("A warning has been sent to the user.");
    }
  }
  
  function lockAccount() {
    const confirmed = confirm("Are you sure you want to lock this account?");
    if (confirmed) {
      console.log("User account locked.");
      alert("The account has been locked.");
    }
  }
  
