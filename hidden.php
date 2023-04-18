<?php 
error_reporting(0);
?>
<input type="hidden" id="dsrd" name="dsrd" value="<?php echo($_GET["SRD_val"]); ?>">
<input type="hidden" id="surl" name="surl" value="<?php echo($_SERVER['HTTP_REFERER']); ?>">
<input type="hidden" id="iip" name="iip" value="<?php echo($_SERVER['REMOTE_ADDR']); ?>">
<input type="hidden" id="ssource" name="ssource" value="<?php echo($_GET['utm_source']); ?>">
<input type="hidden" id="medium" name="medium" value="<?php echo($_GET['utm_medium']); ?>">
<input type="hidden" id="scontent" name="scontent" value="<?php echo($_GET['utm_content']); ?>">
<input type="hidden" id="device" name="device" value="<?php echo($_GET['device']); ?>">
<input type="hidden" id="sterms" name="sterms" value="<?php echo($_GET['utm_term']); ?>">
<input type="hidden" id="utm_campaign" name="utm_campaign" value="<?php echo($_GET["utm_campaign"]); ?>">
<input type="hidden" id="dgclid" name="dgclid" value="<?php echo($_GET["gcid"]); ?>">