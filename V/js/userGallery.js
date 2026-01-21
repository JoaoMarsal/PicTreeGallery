var imgSeccion = document.body.querySelector("#UserImages");

function callImages(){
    for(let i = 0; i < imgSize; i++){
        var img = document.createElement("img");
        img.onclick = function showMetaData(){
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


