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

document.getElementById("payNowBtn").addEventListener("click", function (e) {
  const selected = document.getElementById("paymentChoice").value;
  const partialAmount = document.getElementById("partialAmount").value;
  const errorMsg = document.getElementById("partialError");

  if (
    selected === "partial" &&
    (!partialAmount || parseFloat(partialAmount) <= 0)
  ) {
    e.preventDefault(); // prevent form submission
    errorMsg.style.display = "block";
    errorMsg.textContent = "Please enter a valid partial payment amount.";
  } else {
    errorMsg.style.display = "none";
  }
});
document.getElementById("applyCouponBtn").onclick = function () {
  const code = document.getElementById("couponCode").value.trim();
  const message = document.getElementById("couponMessage");
  const total = document.querySelector(".updated-total");
  const updatedTotal = document.getElementById("updatedTotal");

  if (code === "") {
    message.textContent = "Enter a coupon code!";
    message.style.color = "red";
    message.style.display = "block";
    total.style.display = "none";
  } else {
    message.textContent = "Coupon applied!";
    message.style.color = "green";
    message.style.display = "block";
    updatedTotal.textContent = "180.00";
    total.style.display = "block";
  }
};
