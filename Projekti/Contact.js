//function submitForm() {
   // var name = document.getElementById("name").value;
    //var email = document.getElementById("email").value;
    //var message = document.getElementById("message").value;

    //if (name === "" || email === "" || message === "") {
      //  alert("Please fill in all fields.");
        //    window.location.href = "MainPage.html";
    //} else {
      //  alert("Thank you, " + name + "! Your message has been submitted.");
        //document.getElementById("contactForm").reset();
    //}

// Kushtëzim IF
function submitForm() {
let nameInput = document.getElementById('name');
if (nameInput.value.length === 0) {
    alert('Please enter your name.');
}

// Kushtëzim IF...ELSE
let emailInput = document.getElementById('email');
if (emailInput.value.includes('@')) {
    console.log('Valid email address.');
} else {
    console.log('Invalid email address.');
}

// SWITCH
let messageInput = document.getElementById('message');
let messageLength = messageInput.value.length;
switch (true) {
    case messageLength < 10:
        console.log('Message is too short.');
        break;
    case messageLength >= 10 && messageLength < 50:
        console.log('Message length is okay.');
        break;
    default:
        console.log('Message is too long.');
}

}
  
$(document).ready(function(){
    $("form").submit(function(){
        alert("Forma është paraqitur!");
    });
});

