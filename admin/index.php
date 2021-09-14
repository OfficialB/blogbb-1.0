<?php include ("nav.php"); ?>
<div class="container">
    <p><b>Site Name: </b><?php echo $sitename; ?></p>
    <p><b>Site Description: </b><?php echo $sitedesc; ?></p>
    <p><b>Site URL: </b><a href="<?php echo $siteurl; ?>"><?php echo $siteurl; ?></a></p>
    <p><b>Site Image: </b><?php echo $siteimg; ?></p>
    <p><b>Current Announcement: </b><?php echo $siteannouncement; ?></p>
    <p><b>Current Time: </b><?php echo date("l, M. jS, Y - g:i:s A [T]"); ?></p>
</div>