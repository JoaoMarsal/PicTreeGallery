var imgSeccion = document.body.querySelector("#UserImages");
var filterTypeRequest = document.getElementById("type");
var filterNameRequest = document.getElementById("nameSearch");
var filterTypePrivacyRequest = document.getElementById("typePrivacy");


console.log(filterTypeRequest.value);

function callImages(){
    imgSeccion.innerText = "";
    for(let i = 0; i < imgSize; i++){
        if(filterTypeRequest.value != "null" && filterTypeRequest.value != types[i]){
            continue;
        } else if(!names[i].includes(filterNameRequest.value)){
            continue;
        } else if(filterTypePrivacyRequest.value != "null" && filterTypePrivacyRequest.value != privacies[i]){
            continue;
        }
        var img = document.createElement("img");
        img.onclick = function showMetaData(){
            var display = document.body.querySelector(".hoverBox")
            var name = document.body.querySelector("#imgName")
            var type = document.body.querySelector("#imgType")
            var privacy = document.body.querySelector("#imgPrivacy")
            if(display.classList.contains("hidden")){
                display.classList.remove("hidden");
                name.innerHTML = names[i];
                if(types[i] == 1){
                    type.innerHTML = "Core";    
                } else {
                    type.innerHTML = "Non core";
                }
                if(privacies[i] == 1){
                    privacy.innerHTML = "Public";    
                } else {
                    privacy.innerHTML = "Private";
                }
            } else {
                display.classList.add("hidden")
            }
        };
        img.src = "../../" + paths[i];
        img.style = "width: 150px; height: 150px; object-fit: cover;"
        imgSeccion.appendChild(img);
    }
}

function showMetaData(){
            var display = document.body.querySelector(".hoverBox")
            if(display.classList.contains("hidden")){
                display.classList.remove("hidden");
            } else {
                display.classList.add("hidden")
            }
};


