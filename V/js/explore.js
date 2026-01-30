var imgs = document.body.querySelector("#showImgs")

function callImgs(){
        for(let j = 0; j < imgsLength; j++){ 
            var img = document.createElement("img");
            img.src = "../../" + paths[j];
            img.style = "width: 150px; height: 150px; object-fit: cover;"
            img.onclick = function showMetaData(){
                var display = document.body.querySelector(".hoverBox")
                var name = document.body.querySelector("#imgName")
                var author = document.body.querySelector("#imgAuthor")
                if(display.classList.contains("hidden")){
                    display.classList.remove("hidden");
                    name.innerHTML = names[j];
                    if(authors[j] == ""){
                        authorText = document.querySelector("#author");
                        authorText.innerText = "E-mail: ";
                        author.innerHTML = emails[j];
                    } else {
                        authorText = document.querySelector("#author");
                        authorText.innerText = "Author: ";
                        author.innerHTML = authors[j];
                    }
                } else {
                    display.classList.add("hidden")
                }
            }
            imgs.appendChild(img);
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