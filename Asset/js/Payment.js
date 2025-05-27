document
  .getElementById("paymentChoice")
  .addEventListener("change", function () {
    const selected = document.getElementById("paymentChoice").value;
    const partialSection = document.getElementById("partialPaymentSection");

    if (selected === "partial") {
      partialSection.style.display = "block";
    } else {
      partialSection.style.display = "none";
    }
  });


function confirmPayment() {
  PaymentChoice = document.getElementById("paymentChoice").value;
  if (PaymentChoice === "partial") {
    const errorMsg = document.getElementById("partialError");
    partialamount = document.getElementById("partialAmount").value;
    if (partialamount == "" || partialamount <= 0) {
      errorMsg.style.display = "block";
      errorMsg.textContent = "Please enter a valid partial payment amount.";
      return false;
    }
  } else {
  }
}
// Coupon Code 
function confirmCouponCode() { 

const code = document.getElementById("couponCode").value.trim();
  const message = document.getElementById("couponMessage");
  const total = document.querySelector(".updated-total");
  const updatedTotal = document.getElementById("updatedTotal");

  if (code === "") {
    message.textContent = "Enter a coupon code!";
    message.style.color = "red";
    message.style.display = "block";
    total.style.display = "none";
    return false;
  }
  // else {
  // //   message.textContent = "Coupon applied!";
  //   message.style.display = "block";
  //   return true;
  //    //total.style.display = "block";
  // }
}



// Total Price Calculation
document.getElementById("ticketQuantity").addEventListener("change", function () {
  TicketQuantity = document.getElementById("ticketQuantity").value;
  totalPrice = 0;
  ticketPrice = document.getElementById("ticketPriceDisplay").textContent;
  TotalPrice = TicketQuantity * ticketPrice;
  document.getElementById("TotalAmount").innerHTML = TotalPrice.toFixed(2);
});