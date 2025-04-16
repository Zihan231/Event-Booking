document.querySelector("form").onsubmit = function (e) {
  if (!Validation()) {
    e.preventDefault(); // stop form submission
  }
};

function Validation() {
  const name = document.getElementById("EntName").value.trim();
  const date = document.getElementById("EntDate").value;
  const time = document.getElementById("EntTime").value;
  const location = document.getElementById("EntLocation").value.trim();
  const description = document.getElementById("EntDescription").value.trim();
  const image = document.getElementById("EntImage").value;
  const type = document.getElementById("EntType").value;
  const price = document.getElementById("EntPrice").value;
  const organizer = document.getElementById("EntOrganizer").value.trim();
  const contact = document.getElementById("EntContact").value.trim();

  const errorMsg = document.getElementById("errorMsg");

  if (!name) {
    errorMsg.textContent = "Please enter the event name.";
    return false;
  }
  if (!date) {
    errorMsg.textContent = "Please select the event date.";
    return false;
  }
  if (!time) {
    errorMsg.textContent = "Please select the event time.";
    return false;
  }
  if (!location) {
    errorMsg.textContent = "Please enter the event location.";
    return false;
  }
  if (!description) {
    errorMsg.textContent = "Please enter the event description.";
    return false;
  }
  if (!image) {
    errorMsg.textContent = "Please upload an event image.";
    return false;
  }
  if (!type) {
    errorMsg.textContent = "Please select the event type.";
    return false;
  }
  if (price === "" || isNaN(price) || Number(price) < 0) {
    errorMsg.textContent = "Please enter a valid event price (0 or higher).";
    return false;
  }
  if (!organizer) {
    errorMsg.textContent = "Please enter the event organizer.";
    return false;
  }
  if (!contact || contact.length < 6) {
    errorMsg.textContent = "Please enter a valid event contact.";
    return false;
  }

  errorMsg.textContent = ""; // Clear if everything is valid
  return true;
}
