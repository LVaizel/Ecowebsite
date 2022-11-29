function btntransform(x){
    x.classList.toggle("change");
    let navbar= document.querySelector(".header .navbarclass");
    navbar.classList.toggle("active")
}

var slideIndex = 0;
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "flex";
    setTimeout(carousel, 8000); 
}

let currentItem = 3;
function loadmore(x){
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (var i = currentItem; i < currentItem + 3; i++){
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
        x.style.display = 'none';
    }
}