<?php
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=candeurlakescape_brochure.pdf");
header("Content-Type: application/pdf");
header("Content-Transfer-Encoding: binary");
readfile('candeurlakescape_brochure.pdf');
?>
    