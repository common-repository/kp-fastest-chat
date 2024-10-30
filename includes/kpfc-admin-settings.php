<?php


// Add Links to plugins.php Page and Rearrange Settings Links
function kpfc_setting_links( $actions, $plugin_file ) 
{
	static $plugin;

	if (!isset($plugin))
		$plugin = KPFC_BASENAME;
	
	if ($plugin == $plugin_file)
	{
		$settings = array('settings' => '<a href="options-general.php?page=kpfc">' . __('Settings', 'General') . '</a>');
		$site_link = array('support' => '<a href="https://www.kreativopro.com/" target="_blank">Get WordPress Support</a>');
		
    	$actions = array_merge($settings, $actions);
		$actions = array_merge($site_link, $actions);
	}
		
	return $actions;
}
add_filter( 'plugin_action_links', 'kpfc_setting_links', 10, 2 );



// Register KPFC Chat Page Settings in WordPress General Settings Page
function kpfc_register_options_page()
{
  add_options_page('KP Fastest Chat', 'KP Fastest Chat', 'manage_options', 'kpfc', 'kpfc_options_page');
}
add_action('admin_menu', 'kpfc_register_options_page');



// Add Settings If Plugin Has Been Activated For the First Time
function kpfc_first_install()
{
	$options = [];
	$options['link']	= get_site_url();
	$options['image']	= KPFC_URL.'assets/images/call.png';
  
	if( !get_option( 'kpfc_settings' ) )
		update_option( 'kpfc_settings', $options );
}