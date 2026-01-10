const input = document.querySelector("#inputImage");
const preview = document.getElementById("diagnosis");

function updatePreview(){
    while (preview.firstChild) {
        preview.removeChild(preview.firstChild);
    }

    const img = document.createElement("img")

    const files = input.files;

    img.src = URL.createObjectURL(files[0])

    img.style.width = "50px";
    img.style.height = "50px"; 
    preview.appendChild(img)


}

input.addEventListener("change", updatePreview);

function saveFile(){
            var inputContent = document.getElementById("inputImage");
            console.log(inputContent.files[0]);
        }


//Image repository

function imgGeneration(){
    var imgs = document.querySelector("#imgs")
    var imgSize = `${(document.body.clientWidth) / (2 * numberImgs)}`
    var imgList = []

    for(let j = 0; j < numberImgs; j++){
        var img = document.createElement("img")
        img.src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpvRRub-ODLG5AAHLD4g1Hyx1X1RAbvUPuBpdM1whwQqdOOQiZzfSvuDtGrRgADTc-HMNwlumHxyAG4GFg7IKcs25oU0D2Qm9lWmwBpz0&s=10"
        img.width = imgSize
        img.height = imgSize
        imgs.appendChild(img)
        
    }
}