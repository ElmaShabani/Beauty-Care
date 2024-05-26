document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Parandalon rifreskimin e faqes

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    console.log('Form submitted with:', { name, email, message });

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'Contact.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest'); // Vendos header-in për AJAX

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            console.log('AJAX request state:', xhr.readyState, 'status:', xhr.status);
            if (xhr.status === 200) {
                console.log('Response received:', xhr.responseText);
                document.getElementById('response').innerHTML = xhr.responseText;
            } else {
                console.error('Error in AJAX request:', xhr.status, xhr.statusText);
            }
        }
    };

    const params = 'name=' + encodeURIComponent(name) + '&email=' + encodeURIComponent(email) + '&message=' + encodeURIComponent(message);
    console.log('Params:', params);
    xhr.send(params);
});


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

