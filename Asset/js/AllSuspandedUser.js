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

function handleConfirmAction(clickedElement) {
  const dropdown = clickedElement.previousElementSibling;
  const selectedOption = dropdown.value;

  if (selectedOption === "") {
    alert("Please select an option before confirming.");
  } else {
    alert(
      `You have selected: ${selectedOption}. The user will be updated accordingly.`
    );
  }
}
