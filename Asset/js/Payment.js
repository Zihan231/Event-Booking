document
  .getElementById("paymentChoice")
  .addEventListener("change", function () {
    const selected = this.value;
    const partialSection = document.getElementById("partialPaymentSection");
    if (selected === "partial") {
      partialSection.style.display = "block";
    } else {
      partialSection.style.display = "none";
    }
  });

ocument
  .getElementById("payNowBtn")
  .addEventListener("click", function (e) {
    const selected = document.getElementById("paymentChoice").value;
    const partialAmount = document.getElementById("partialAmount").value;
    const errorMsg = document.getElementById("partialError");

    if (selected === "partial" && (!partialAmount || parseFloat(partialAmount) <= 0)) {
      e.preventDefault(); // prevent form submission
      errorMsg.style.display = "block";
      errorMsg.textContent = "Please enter a valid partial payment amount.";
    } else {
      errorMsg.style.display = "none";
    }
  });