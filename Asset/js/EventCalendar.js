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

// const divs = document.querySelectorAll(".eventCards");

// divs.forEach((div) => {
//   div.addEventListener("click", () => {
//     window.location.href = "EventDetails.html"; // Change this URL
//   });
// });
