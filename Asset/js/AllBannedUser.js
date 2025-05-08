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
document.addEventListener("DOMContentLoaded", function () {
    const unbanButtons = document.querySelectorAll(".unban-button");
    unbanButtons.forEach(function (button) {
      button.addEventListener("click", function () {
        const confirmUnban = confirm("Are you sure you want to unban this user?");
        if (confirmUnban) {
          // You can add further logic here, e.g., send a request to the server
          alert("User has been unbanned.");
        } else {
          // Optional: Do something if canceled
          console.log("Unban canceled.");
        }
      });
    }); 
  });
