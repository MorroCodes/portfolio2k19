function toggleModal(){
    document.querySelector("div.modal").classList.toggle("hidden");
}
function setModal(url, description){
    document.querySelector("div.modal img").src = url;
    document.querySelector("div.modal p").innerHTML = description;
}

let itemArray = document.querySelectorAll("a.work__item");
for( var i = 0; i<itemArray.length; i++){
    itemArray[i].addEventListener("click", function(e){
        var data = this.getAttribute("data-id");
        var description = this.getAttribute("data-desc");
        console.log(description);
        e.preventDefault();
        toggleModal();
        setModal(data, description);
        //let url = this.dataset.id;
        //alert(url);
    });
}
document.querySelector(".close").addEventListener("click", function(e){
    e.preventDefault();
    toggleModal();
});
document.querySelector(".x").addEventListener("click", function(e){
    e.preventDefault();
    toggleModal();
});
