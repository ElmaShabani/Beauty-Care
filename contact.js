function submitForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    if (name === "" || email === "" || message === "") {
        alert("Please fill in all fields.");
    } else {
        alert("Thank you, " + name + "! Your message has been submitted.");
        document.getElementById("contactForm").reset();
    }
}
$(document).ready(function(){
    $("form").submit(function(){
        alert("Forma është paraqitur!");
    });
});