document.addEventListener("DOMContentLoaded", loadInputs);

let load = false;

function loadInputs(){
    if(load == true){
        return;
    } else {
        var nameInput = document.body.querySelector("#name")
        nameInput.value = imgName;
        var descriptionInput = document.body.querySelector("#description")
        descriptionInput.value = imgDescription;
        var typeInput = document.body.querySelector(`#type${imgType}`);
        typeInput.checked = true; 
        var privacyInput = document.body.querySelector(`#privacy${imgType}`);
        privacyInput.checked = true;
        load = true;
    }
    
}

function recallValueName(){
    var nameInput = document.body.querySelector("#name")
    nameInput.value = imgName;  
}

function recallValueDescription(){
    var descriptionInput = document.body.querySelector("#description")
    descriptionInput.value = imgDescription;
}

function recallValueType(){
    var typeInput = document.body.querySelector(`#type${imgType}`);
    typeInput.checked = true; 
}

function recallValuePrivacy(){
    var privacyInput = document.body.querySelector(`#privacy${imgType}`);
    privacyInput.checked = true;
}