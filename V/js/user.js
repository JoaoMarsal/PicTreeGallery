const input = document.querySelector("#inputImage");
//const preview = document.getElementById("diagnosis");
const box = document.getElementById("imgDiv")
const tips = document.getElementById("imgInputStraw")

function updatePreview(){
    //while (preview.firstChild) {
    //    preview.removeChild(preview.firstChild);
    //}

    //Comments: leftovers on how to do a separate image appear as preview

    //const img = document.createElement("img")

    const files = input.files;

    //img.src = URL.createObjectURL(files[0])

    //img.style.width = "50px";
    //img.style.height = "50px";

    let validType = ["/png", "/jpeg", "/jpg"];
    let found = validType.some(fileTypes => files[0].type.includes(fileTypes))
    if(found) {
        tips.style = "opacity: 0;"
        box.style = "background-image: url(" + URL.createObjectURL(files[0]) + "); background-size: cover;" 
    } else {
        tips.style = "opacity: 100%"
        box.style = "background-image: ''; background-size: auto"
    }
    //preview.appendChild(img)



}

input.addEventListener("change", updatePreview);

function saveFile(){
            var inputContent = document.getElementById("inputImage");
            console.log(inputContent.files[0]);
        }


//Image repository

function imgGeneration(){
    if(approved === true){
        var imgSize = `${(document.body.clientWidth) / (2 * numberImgs)}`
        var imgList = [];
        var imgs = document.querySelector("#imgs")
        for(let j = 0; j < numberImgs; j++){
            var img = document.createElement("img")
            img.style = "object-fit: cover;"
            img.src = "../../" + paths[j]; 
            img.width = imgSize
            img.height = imgSize
            imgs.appendChild(img)
        }
    } else {
        var imgs = document.querySelector("#imgs");
        imgs.innerHTML = "<p>Couldn't load any images</p>"
    } 
}