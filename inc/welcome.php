<?php
defined('ABSPATH') || exit;
function obWPgenerator_home(){
?>
<div class="wrap">
<h1>Welcome to event manager</h1><hr>
<center>
<img src="<?php echo plugins_url( '../assets/img/today.png', __FILE__ )?>">
<br>
<h2>Organize your events more easily...</h2>
<h3 class="shortcode-head">
<?php
$event_page_id = get_option("obeventmanager_page_id");
if ($event_page_id != null) {
?>
Use shortcode <span style="color: green;"><a target="_blank" href="<?php echo get_page_link($event_page_id); ?>">[ob-event-manager]</a></span> any of your post | page.
<?php
} else { ?>
Use shortcode <span style="color: green;">[ob-event-manager]</span> any of your post | page.
<?php	
}
?>
</h3>
<h3><a href="<?php echo admin_url(); ?>admin.php?page=OBeventManagerIMPORT" class="button button-primary button-large" href="">Import event csv data >></a></h3>
<h3><a href="<?php echo admin_url(); ?>edit.php?post_type=ob-event" class="button button-primary button-large" href="">Go to all events list >></a> 
<a href="<?php echo admin_url(); ?>post-new.php?post_type=ob-event" class="button button-primary button-large" href="">Create a new event >></a></h3>

</center>
</div>
<?php
}