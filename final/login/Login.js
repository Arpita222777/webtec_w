const form = document.getElementById("main_form"); 
const username = document.getElementById("username");
const password = document.getElementById("password");
const loginButton = document.getElementById("login_btn"); 

function isValidLength(str, maxLength = 30) {
    return str.trim().length <= maxLength;
}

form.addEventListener("submit", function (e) {
    let isValid = true; 

    const uname = username.value.trim();
    const pwd = password.value.trim();

 
    if (uname === "" || pwd === "") {
        alert("Please fill in both Username and Password.");
        isValid = false;
    }


    if (isValid && (!isValidLength(uname) || !isValidLength(pwd))) {
        alert("Username and Password must be less than 30 characters.");
        isValid = false;
    }

    if (!isValid) {
        e.preventDefault(); 
    }
    
});