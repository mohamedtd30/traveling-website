const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
var flag = true;

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

document.getElementById("nameInput").addEventListener("blur", function () {
    const name = this.value;
    if (!name) {
        document.getElementById("nameError").innerText = "Please enter a name";
        document.getElementById("nameError").style.display = "block";
        flag = true;
    }
    else if (!validateName(name)){
        document.getElementById("nameError").innerText = "Invalid name";
        document.getElementById("nameError").style.display = "block";
        flag = true;
    }
    
});

document.getElementById("emailInput").addEventListener("blur", function () {
    const email = this.value;
    if (!email) {
        document.getElementById("emailError").innerText = "Please enter an email";
        document.getElementById("emailError").style.display = "block";
        flag = true;
    } else if (!validateEmail(email)) {
        document.getElementById("emailError").innerText = "Invalid email address";
        document.getElementById("emailError").style.display = "block";
        flag = true;
    }
    });

document.getElementById("passwordInput").addEventListener("blur", function () {
    const password = this.value;
    if (!password) {
        document.getElementById("passwordError").innerText = "Please enter a password";
        document.getElementById("passwordError").style.display = "block";
        flag = true;

    } else if (!validatePassword(password)) {
        document.getElementById("passwordError").innerText = "Invalid password";
        document.getElementById("passwordError").style.display = "block";
        flag = true;
    }
    });

document.getElementById("repeatPasswordInput").addEventListener("blur", function () {
    const repeatPassword = this.value;
    const password = document.getElementById("passwordInput").value;
    if (!repeatPassword) {
        document.getElementById("repeatPasswordError").innerText = "Please repeat the password";
        document.getElementById("repeatPasswordError").style.display = "block";
        flag = true;
    } else if (repeatPassword !== password) {
        document.getElementById("repeatPasswordError").innerText = "Passwords do not match";
        document.getElementById("repeatPasswordError").style.display = "block";
        flag = true;
    }
});

document.getElementById("nameInput").addEventListener("input", function () {
    if (validateName(this.value))
        document.getElementById("nameError").style.display = "none";
    flag = false;
});

document.getElementById("emailInput").addEventListener("input", function () {
    if (validateEmail(this.value))
        document.getElementById("emailError").style.display = "none";
    flag = false;
});

document.getElementById("passwordInput").addEventListener("input", function () {
    if (validatePassword(this.value)) 
        document.getElementById("passwordError").style.display = "none";
    flag = false;
});


document.getElementById("repeatPasswordInput").addEventListener("input", function () {
    if (this.value === document.getElementById("passwordInput").value) 
        document.getElementById("repeatPasswordError").style.display = "none";
    flag = false;
});

document.getElementById("inputLogEmail").addEventListener("blur", function () {
    const email = this.value;
    if (!email) {
        document.getElementById("logEmailError").innerText = "Please enter an email";
        document.getElementById("logEmailError").style.display = "block";
        flag = true;
    } else if (!validateEmail(email)) {
        document.getElementById("logEmailError").innerText = "Invalid email address";
        document.getElementById("logEmailError").style.display = "block";
        flag = true;
    }
    });

    document.getElementById("inputLogPass").addEventListener("blur", function () {
    const password = this.value;
    if (!password) {
        document.getElementById("logPassError").innerText = "Please enter a password";
        document.getElementById("logPassError").style.display = "block";
        flag = true;
    } else if (!validatePassword(password)) {
        document.getElementById("logPassError").innerText = "Invalid password";
        document.getElementById("logPassError").style.display = "block";
        flag = true;
    }
    });

    document.getElementById("inputLogEmail").addEventListener("input", function () {
        if (validateEmail(this.value))
            document.getElementById("logEmailError").style.display = "none";
        flag = false;
    });

    document.getElementById("inputLogPass").addEventListener("input", function () {
        if (validatePassword(this.value)) 
            document.getElementById("logPassError").style.display = "none";
        flag = false;
    });


function validateEmail(email) {
    const regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(email);
}
function validatePassword(password) {
    const minLength = 8;
    return password.length >= minLength && /\d/.test(password) && /[a-zA-Z]/.test(password);
}

function validateName(name) {
    const maxLength = 40;
    const minLength = 2;
    const regex = /^[a-zA-Z\s]*$/; 
    return name.length <= maxLength && name.length >= minLength && regex.test(name);
}

var login = document.getElementById('login-btn');
var register = document.getElementById('register-btn');


login.addEventListener("click", function(event){
    if (flag){
        event.preventDefault();
        var loginerror = document.getElementById('loginError');
        loginerror.style.display = 'block';
        loginerror.innerHTML = 'Fill the fields'
    }
    else{
        event.submit();
    }
});
register.addEventListener("click", function(event){
    if (flag){
        event.preventDefault();
        var registererror = document.getElementById('registerError');
        registererror.style.display = 'block';
        registererror.innerHTML = 'Fill the fields'
    }
    else{
        event.submit();
    }
});
