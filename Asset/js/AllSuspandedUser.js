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
// Function to handle the confirmation action
function handleConfirmAction(button) {
  // Get the selected option from the dropdown
  const dropdown = button.previousElementSibling; // This gets the dropdown before the confirm button
  const selectedOption = dropdown.value;

  // Check if a valid option has been selected
  if (selectedOption === "") {
    alert("Please select an option before confirming.");
  } else {
    // Show a confirmation alert
    alert(
      `You have selected: ${selectedOption}. The user will be updated accordingly.`
    );
    // Optionally, you can add logic to perform the action, like updating the user status
  }
}
