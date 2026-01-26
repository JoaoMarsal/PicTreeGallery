var imgs = document.body.querySelector("#showImgs")

function callImgs(){
    for(let j = 0; j < imgsLength; j++){ 
        var img = document.createElement("img");
        img.src = "../../" + paths[j];
        img.style = "width: 150px; height: 150px; object-fit: cover;"
        imgs.appendChild(img);
    }
}