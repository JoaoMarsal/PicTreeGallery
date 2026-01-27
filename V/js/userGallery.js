var imgSeccion = document.body.querySelector("#UserImages");
var filterTypeRequest = document.getElementById("type");
var filterNameRequest = document.getElementById("nameSearch");

console.log(filterTypeRequest.value);

function callImages(){
    imgSeccion.innerText = "";
    for(let i = 0; i < imgSize; i++){
        if(filterTypeRequest.value != "null" && filterTypeRequest.value != types[i]){
            continue;
        } else if(!names[i].includes(filterNameRequest.value)){
            continue;
        }
        var img = document.createElement("img");
        img.onmouseover = function showMetaData(){
            var display = document.body.querySelector(".hoverBox")
            var name = document.body.querySelector("#imgName")
            var type = document.body.querySelector("#imgType")
            if(display.classList.contains("hidden")){
                display.classList.remove("hidden");
                name.innerHTML = names[i];
                type.innerHTML = types[i];
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


