<?php

//Print This Code Just Before </head> in header.php File of Any Theme.
function kp_fastest_chat()
{
	$options = get_option( 'kpfc_settings' );
?>

	<a href="<?php echo $options['link']; ?>" target="_blank"><img src="<?php  echo $options['image']; ?>" class="kpfc"></a>

<?php
}
add_action('wp_footer', 'kp_fastest_chat');