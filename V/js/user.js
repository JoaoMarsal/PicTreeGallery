const input = document.getElementById("inputImage");
const preview = document.getElementById("preview");
input.addEventListener("change", updatePreview);

function updatePreview(){
    while(preview.firstChild){
        preview.removeChild(preview.firstChild);
    }
    


}