document.getElementById("BookNowBTN").addEventListener("click", function () {
  var waitingListContainer = document.getElementById("WaitingListContainer");
  var bookNowButton = document.getElementById("BookNowBTN");

  if (
    waitingListContainer.style.display === "none" ||
    waitingListContainer.style.display === ""
  ) {
    waitingListContainer.style.display = "block";
    bookNowButton.style.display = "none";
  }
});
