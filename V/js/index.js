function signUp(){
    login = document.getElementById("login");
    register = document.getElementById("register");
    
    if(login.classList.contains("hidden")){
        register.classList.add("hidden");
        login.classList.remove("hidden");
    } else {
        login.classList.add("hidden");
        register.classList.remove("hidden");
    }
}

function passwordCheck(){
    var password = document.getElementById("nPassword");
    var passwordAdvice = document.getElementById("nTips");
    if(password.value.length == 0){
        passwordAdvice.innerText = "";
    } else if(password.value.length < 8 && password.value.length > 0){
        passwordAdvice.innerText = "*Password must have at least 8 characters";
    } else if(hasUpperCase(password.value)){
        passwordAdvice.innerText = "*Password must contain at least one upper case letter"
    } else if(hasLowerCase(password.value)){
        passwordAdvice.innerText = "*Password must contain at least one lower case letter"
    } else if(/^[a-zA-Z]+$/.test(password.value)) {
        passwordAdvice.innerText = "*Password must contain at least one digit"    
    } else if(/^[a-zA-Z0-9]+$/.test(password.value)) {
        passwordAdvice.innerText = "*Password must contain at least one special character"    
    } else {
        passwordAdvice.innerText = "";
    }
}

function hasUpperCase(string){
    return string == string.toLowerCase();
}

function hasLowerCase(string){
    return string == string.toUpperCase();
}