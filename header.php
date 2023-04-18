
<header id="navbar_top">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
<div class="container">

<a class="navbar-brand des" href="index.php">
<img class="cl-logo" src="imgs/candeurlakescapelogo.png" alt="candeurlakescape">
</a>

<a class="navbar-brand mob" href="index.php">
<img class="cl-logo" src="imgs/candeurlakescapelogo-mobile.jpg" alt="candeurlakescape">
</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse item-center" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto mb-2 mb-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 200px;">
<li class="nav-item active">
<a class="nav-link" aria-current="page" href="index.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#about">About</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#project">Project</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#floorplan">Floor Plan</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#amenities">Amenities</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#gallery">Gallery</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#locations">Location</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#contact">Contact</a>
</li>
</ul>
<img class="w-10" src="imgs/logo.png" alt="candeurconstructions-logo">
</div>
</div>
</nav>
</header>

<script>
document.addEventListener("DOMContentLoaded", function(){
window.addEventListener('scroll', function() {
if (window.scrollY > 50) {
document.getElementById('navbar_top').classList.add('fixed-top');
// add padding top to show content behind navbar
navbar_height = document.querySelector('.navbar').offsetHeight;
document.body.style.paddingTop = navbar_height + 'px';
} else {
document.getElementById('navbar_top').classList.remove('fixed-top');
// remove padding top from body
document.body.style.paddingTop = '0';
} 
});
}); 

// Add active class to the current button in nav-bar (highlight it)
var header = document.getElementById("navbar_top");
var btns = header.getElementsByClassName("nav-item");
for (var i = 0; i < btns.length; i++) {
btns[i].addEventListener("click", function () {
var current = document.getElementsByClassName("active");
current[0].className = current[0].className.replace(" active", " ");
this.className += " active";
});
}
</script>

