function isValidSearch() {
  SearchedIteam = document.getElementById("search-input").value;
  if (SearchedIteam === "") {
    document.getElementById("errorMessage").innerHTML =
      "Search field cannot be empty!";
    return false;
  } else {
    return true;
  }
}
function isValidEmail() {
  const email = document.getElementById("newsletter-input").value;
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!emailPattern.test(email)) {
    document.getElementById("EmailError").innerHTML =
      "**Please enter a valid email address.**";
    return false;
  } else {
    return true;
  }
}
document.getElementById("BookNowBtn_1").addEventListener("click", function () {
  window.location.href = "./View/EventDetails.html";
});
document.getElementById("BookNowBtn_2").addEventListener("click", function () {
  window.location.href = "./View/EventDetails.html";
});
document.getElementById("BookNowBtn_3").addEventListener("click", function () {
  window.location.href = "./View/EventDetails.html";
});
document.getElementById("BookNowBtn_4").addEventListener("click", function () {
  window.location.href = "./View/EventDetails.html";
});
