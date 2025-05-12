const seats = document.querySelectorAll(".seat");
const selectedSeatsList = document.getElementById("selected-seats-list");
const bookedSeatsList = document.getElementById("booked-seats-list");

seats.forEach((seat) => {
  seat.addEventListener("click", () => {
    if (!seat.classList.contains("booked")) {
      seat.classList.toggle("selected");
      updateSelectedList();
    }
  });
});

function updateSelectedList() {
  const selectedSeats = document.querySelectorAll(".seat.selected");
  selectedSeatsList.innerHTML = "";
  selectedSeats.forEach((seat) => {
    const li = document.createElement("li");
    li.textContent = seat.textContent;
    selectedSeatsList.appendChild(li);
  });
}

function confirmBooking() {
  const selectedSeats = document.querySelectorAll(".seat.selected");
  selectedSeats.forEach((seat) => {
    seat.classList.remove("selected");
    seat.classList.add("booked");

    const li = document.createElement("li");
    li.textContent = seat.textContent;
    bookedSeatsList.appendChild(li);
  });
  selectedSeatsList.innerHTML = "";
  alert("Your seats have been booked successfully!");
  window.location.href = "../View/Payment.html";
}
