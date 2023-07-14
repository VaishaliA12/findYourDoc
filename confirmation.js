function showAlert() {
    const overlay = document.createElement("div");
    overlay.classList.add("overlay");
  
    const alertBox = document.createElement("div");
    alertBox.classList.add("alert-box");
  
    const alertText = document.createElement("p");
    alertText.textContent = "Your Appointment has been Booked!!";
    alertBox.appendChild(alertText);
  
    const closeButton = document.createElement("button");
    closeButton.textContent = "Close";
    closeButton.addEventListener("click", hideAlert);
    alertBox.appendChild(closeButton);
  
    overlay.appendChild(alertBox);
    document.body.appendChild(overlay);
  }
  
  function hideAlert() {
    const overlay = document.querySelector(".overlay");
    document.body.removeChild(overlay);
    window.location.href = "index.html";
  }
  