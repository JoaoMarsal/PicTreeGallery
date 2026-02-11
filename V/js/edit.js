function loadInputs(){
    var nameInput = document.body.querySelector("#name")
    nameInput.value = imgName;
    var descriptionInput = document.body.querySelector("#description")
    descriptionInput.value = imgDescription;
    var typeInput = document.body.querySelector(`#type${imgType}`);
    typeInput.checked = true; 
    var privacyInput = document.body.querySelector(`#privacy${imgType}`);
    privacyInput.checked = true;
}