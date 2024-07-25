//  addeventlistener(on click)= submit 
// if submit corret = send to htmlsuccess 
// else popup window alert saying, missing information


function validateForm() {
    const data = ["Nom", "Prénom", "Email", "Objet", "Message"];
    const form = document.forms["form"];
    
    const infoManquante = data.some(data => !form[data].value);
    
    if (infoManquante) {
      alert("MISSING INFO");
    } else {
      window.location.href = "success.html";
    }
  }
  
  document.getElementById("submit").addEventListener("click", function(event) {
    event.preventDefault();
    validateForm();
  });




