var imgSeccion = document.body.querySelector("#UserImages");

function callImages(){
    for(let i = 0; i < imgSize; i++){
        var img = document.createElement("img");
        img.src = "../../" + paths[i];
        img.style = "width: 150px; height: 150px; object-fit: cover;"
        imgSeccion.appendChild(img);
    }
}