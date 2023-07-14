function showPrompt() {
    const overlay = document.createElement("div");
    overlay.classList.add("overlay");
  
    const promptBox = document.createElement("div");
    promptBox.classList.add("prompt-box");
  
    const promptText = document.createElement("p");
    promptText.textContent = "Please enter your location ";
    promptBox.appendChild(promptText);
  
    const inputField = document.createElement("input");
    inputField.setAttribute("type", "text");
    promptBox.appendChild(inputField);
  
    const cancelButton = document.createElement("button");
    cancelButton.textContent = "Cancel";
    cancelButton.addEventListener("click", hidePrompt);
    promptBox.appendChild(cancelButton);
  
    const okButton = document.createElement("button");
    okButton.textContent = "OK";
    okButton.addEventListener("click", submitForm);
    promptBox.appendChild(okButton);
  
    overlay.appendChild(promptBox);
    document.body.appendChild(overlay);
  }
  
  function hidePrompt() {
    const overlay = document.querySelector(".overlay");
    document.body.removeChild(overlay);
  }
  
  function submitForm() {
    const inputField = document.querySelector("input");
    const name = inputField.value;
    hidePrompt();
    window.location.href = "hospitallist.html";
  }
  