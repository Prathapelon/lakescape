<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->


<script  src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js'></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- <script type="text/javascript" src="bootstrap.min.js"></script>
<script type="text/javascript" src="common.js"></script> -->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript" src="js/common.js"></script>

<script src="js/wow.js"></script>
<script>
wow = new WOW({
boxClass: 'wow',
animateClass: 'animated',
offset: 0,
mobile: true,
live: true
}) wow.init();
</script>

<script>
new WOW().init();
</script>

<script>
AOS.init({
once: true
})
</script>

<script src="https://www.google.com/recaptcha/api.js?render=6LcfalUlAAAAAKjmyqqVeH-u-iTwN2AYajRWH8z5"></script>

<script>
function c_validation() {
if (grecaptcha.getResponse() == "") { alert("check roboto"); return false }
};
</script>

<script>
grecaptcha.ready(function () {
grecaptcha.execute('6LcfalUlAAAAAKjmyqqVeH-u-iTwN2AYajRWH8z5', { action: 'homepage' }).then(function (token) {
console.log(token);
document.getElementById("token").value = token;
});
});
</script>

<script>
grecaptcha.ready(function () {
grecaptcha.execute('6LcfalUlAAAAAKjmyqqVeH-u-iTwN2AYajRWH8z5', { action: 'homepage' }).then(function (token) {
console.log(token);
document.getElementById("token1").value = token;
});
});
</script>

<script>
grecaptcha.ready(function () {
grecaptcha.execute('6LcfalUlAAAAAKjmyqqVeH-u-iTwN2AYajRWH8z5', { action: 'homepage' }).then(function (token) {
console.log(token);
document.getElementById("token2").value = token;
});
});
</script>

<script>
grecaptcha.ready(function () {
grecaptcha.execute('6LcfalUlAAAAAKjmyqqVeH-u-iTwN2AYajRWH8z5', { action: 'homepage' }).then(function (token) {
console.log(token);
document.getElementById("token3").value = token;
});
});
</script>


<script>
document.addEventListener("DOMContentLoaded", () => {
function counter(id, start, end, duration) {
let obj = document.getElementById(id),
current = start,
range = end - start,
increment = end > start ? 1 : -1,
step = Math.abs(Math.floor(duration / range)),
timer = setInterval(() => {
current += increment;
obj.textContent = current;
if (current == end) {
clearInterval(timer);
}
}, step);
}
counter("count1", 0, 10, 3000);
counter("count2", 4000, 5000, 3000);
counter("count3", 0, 15, 3000);
counter("count4", 0, 7, 3000);
});

$('.banner-slider').slick({
slidesToShow:1,
slidesToScroll: 1,
autoplay: true,
// autoplay: true,
fade:true,
dots: true,
autoplaySpeed:3000,
});
</script>

<script>
$("button[data-dismiss=modal]").click(function()
{
$(".modal").modal('hide');
});
</script>



<script src="https://cwc.livserv.in/chat.js?lid=23719" id="lp_cwc_xqzyihjdskw" ></script>
<script src="https://cw1.livserv.in?did=23719&amp;pid=1"></script>

