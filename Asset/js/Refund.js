// View Refund Deadline
const refundForm = document.getElementById("refund-deadline-form");
const refundInput = document.getElementById("booking-id");
const refundResult = document.getElementById("deadline-result");

refundForm.addEventListener("submit", function (e) {
  e.preventDefault();
  const bookingId = refundInput.value.trim();

  if (bookingId === "") {
    refundResult.textContent = "Please enter a Booking ID.";
    refundResult.className = "form-message error";
    refundResult.style.display = "block";
  } else {
    refundResult.textContent =
      "Deadline information found for Booking ID: " + bookingId;
    refundResult.className = "form-message success";
    refundResult.style.display = "block";
  }
});

refundInput.addEventListener("input", function () {
  refundResult.style.display = "none";
});

// Submit Cancellation
const cancelForm = document.getElementById("cancellation-form");
const cancelBookingId = document.getElementById("cancel-booking-id");
const cancelReason = document.getElementById("cancel-reason");
const cancelResult = document.getElementById("cancel-confirmation");

cancelForm.addEventListener("submit", function (e) {
  e.preventDefault();
  const bookingId = cancelBookingId.value.trim();
  const reason = cancelReason.value.trim();

  if (bookingId === "" || reason === "") {
    cancelResult.textContent =
      "Please fill in both Booking ID and Cancellation Reason.";
    cancelResult.className = "form-message error";
    cancelResult.style.display = "block";
  } else {
    cancelResult.textContent =
      "Cancellation submitted successfully for Booking ID: " + bookingId;
    cancelResult.className = "form-message success";
    cancelResult.style.display = "block";
  }
});

cancelBookingId.addEventListener(
  "input",
  () => (cancelResult.style.display = "none")
);
cancelReason.addEventListener(
  "input",
  () => (cancelResult.style.display = "none")
);

// Track Request
const trackForm = document.getElementById("track-request-form");
const trackInput = document.getElementById("track-id");
const trackResult = document.getElementById("track-result");

trackForm.addEventListener("submit", function (e) {
  e.preventDefault();
  const trackId = trackInput.value.trim();

  if (trackId === "") {
    trackResult.textContent = "Please enter a Tracking ID.";
    trackResult.className = "form-message error";
    trackResult.style.display = "block";
  } else {
    trackResult.textContent =
      "Tracking information retrieved for ID: " + trackId;
    trackResult.className = "form-message success";
    trackResult.style.display = "block";
  }
});

trackInput.addEventListener(
  "input",
  () => (trackResult.style.display = "none")
);
