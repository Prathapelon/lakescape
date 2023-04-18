<div class="conatact-us-heading">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 d-none d-sm-inline text-start">
        <a href="+91-9988480580"><img class="top-logo" src="./imgs/phone.png" alt="phone-png">+91-9988480580</a>

      </div>
        <div class="col-sm-6  d-none d-sm-inline text-end">
        <a href="sales@candeurconstructionspvtltd.com"> <img class="top-logo" src="./imgs/mail.png" alt="mail-png">sales@candeurconstructionspvtltd.com</a>
      </div>
    </div>
  </div>
</div>



<header id="navbar_top">
<nav class="navbar navbar-expand-lg bg-white">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img  class="cl-logo" src="./imgs/candeurlakescapelogo.png" alt="candeurlakescapelogo"></a>
    <button class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse item-center" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 200px;">
        <li class="nav-item active">
          <a class="nav-link " aria-current="page" href="index.php#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#project">project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#progress">progress</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#amenities">Amenities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#floorplan">FloorPlan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#contact">contact</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
       
      </ul>
      <img class="w-10" src="./imgs/logo.png" alt="candeurconstructions-logo">
   
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

