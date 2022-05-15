window.addEventListener("scroll", function(){
    var nav = document.querySelector("nav");
    nav.classList.toggle("nav-abajo", window.scrollY>0);
})