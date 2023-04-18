<!doctype html>
<html lang="en">
<head>
<title>candeurlakescape</title>

<?php include_once('top-links.php') ?>


<!-- Google Tag Manager -->
<script>
(function (w, d, s, l, i) {
w[l] = w[l] || []; w[l].push({
'gtm.start':
new Date().getTime(), event: 'gtm.js'
}); var f = d.getElementsByTagName(s)[0],
j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-K6PCH22');
</script>
<!-- End Google Tag Manager -->


<!-- Hotjar Tracking Code for https://www.candeurconstructionspvtltd.com/candeurlakescape/ -->
<script>
(function (h, o, t, j, a, r) {
h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
h._hjSettings = { hjid: 3440119, hjsv: 6 };
a = o.getElementsByTagName('head')[0];
r = o.createElement('script'); r.async = 1;
r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
a.appendChild(r);
})(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
</script>

<style>
.center{text-align: center;padding: 30px;}
</style>


</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6PCH22" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->


<a href="javascript:void(0);" class="btn btn-primary enq-btn" data-toggle="modal" data-target="#Enq_Modal">QUICK CONTACT</a>

<a href="tel:+919988480580" class="btn btn-primary wa-btn"><img src="imgs/phone.png" alt="phone"></a>



<?php include_once('header.php') ?>



<div class="banner-section">
<div class="banner-slider">
<div class="banner-bg  position-relative">
<img alt="" class="img-fluid desktop-in w-100  d-none d-sm-block" src="imgs/ban2.jpg">
<img alt="" class="img-fluid mobile-in w-100 d-block d-sm-none" src="imgs/ban-mobile.jpg">
</div>

</div>
</div>


<?php
$download=$_GET['download'];
if ($download == 1)
{
?>
<iframe src="brochure-download.php" style="display:none"></iframe>
<?php
}
?>


<?php $name=$_GET['nam'];
$insted=$_GET['ins'];
?>

<?php // echo ("thank_you.php?nam=".$aname."&ins=".$interestedin."&download=1");?>

<div class="center">
<h1>THANK YOU <br> <?php echo ($name )?> For Showing Your Interest in Candeur!! <br> <?php echo ($insted )?> Our Team will contact you soon...</h1>
</div>

<?php include_once('footer.php') ?>
<?php include_once('buttom-links.php') ?> 

</body>

</html>