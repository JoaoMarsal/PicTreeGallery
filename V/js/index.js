function signUp(){
    login = document.getElementById("login");
    register = document.getElementById("register")
    
    if(login.classList.contains("hidden")){
        register.classList.add("hidden");
        login.classList.remove("hidden");
    } else {
        login.classList.add("hidden");
        register.classList.remove("hidden")
    }
}