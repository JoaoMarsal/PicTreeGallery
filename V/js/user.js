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

