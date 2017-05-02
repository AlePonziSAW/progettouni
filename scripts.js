
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
		/* if (slides[i].style.display === "block"){
			slides[i].style.opacity = "0.4";
			animation-duration: 1.5s;
		} */
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  

    setTimeout(showSlides, 7000); // Change image every 2 seconds
	

}

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
	document.body.style.backgroundColor = "white";
}

function openRegistration(){
	var pop = document.getElementById("regDiv");
	pop.style.display = "block"; 
	
}

var modal = document.getElementById('regDiv');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}