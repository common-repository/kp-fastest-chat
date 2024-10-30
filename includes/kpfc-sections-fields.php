<?php


// Add Settings Sections and Fields in KPFC Settings Page
function kpfc_settings()
{
	
	// If Plugin Settings Don't Exist, Then Create Them
	kpfc_first_install();
  
	
	// Find KPFC Setting Section Hook and Add a Section There
	add_settings_section( 'kpfc_settings_section', __( '', 'kpfc' ), 'kpfc_settings_description_callback', 'kpfc' );
	
	
	//Add Radio Selector Settings Field in KPFC Setting Page
	add_settings_field( 'kpfc_settings_image', __( 'Chat Image', 'kpfc'), 'kpfc_settings_image_callback', 'kpfc', 'kpfc_settings_section',
	[
	'option_one' => KPFC_URL.'assets/images/call.png',
	'option_two' => KPFC_URL.'assets/images/call-new.png',
	'option_three' => KPFC_URL.'assets/images/chat.png',
	'option_four' => KPFC_URL.'assets/images/email.png',
	'option_five' => KPFC_URL.'assets/images/live-chat.png',
	'option_six' => KPFC_URL.'assets/images/messenger.png',
	'option_seven' => KPFC_URL.'assets/images/skype.png',
	'option_eight' => KPFC_URL.'assets/images/sms.png',
	'option_nine' => KPFC_URL.'assets/images/sms-new.png',
	'option_ten' => KPFC_URL.'assets/images/whatsapp.png',
	'option_eleven' => '',
	] );

	
	// Add Chat Link Field in KPFC Setting Page
	add_settings_field( 'kpfc_settings_link', __( 'Chat Link', 'kpfc'), 'kpfc_settings_link_callback', 'kpfc', 'kpfc_settings_section' );
	
	
	// Register Our Settings and Save Them
	register_setting( 'kpfc_settings', 'kpfc_settings' );
	
}
add_action( 'admin_init', 'kpfc_settings' );



// Setting Section Description Function
function kpfc_settings_description_callback()
{
	echo '<div class="kpfc-desc"><b>Kreativo Pro Fastest Chat</b> is the fastest live chat plugin for WordPress. If you are worried about chat plugins slowing down your website speed, then this plugin will solve all your problems. Plugin Created by <a href="https://www.kreativopro.com/" target="_blank">Kreativo Pro</a>.</p></div>';
}



// Build Layout For Chat Link Field
function kpfc_settings_link_callback()
{
	$options = get_option( 'kpfc_settings' );
	$custom_text = '';
	
	if( isset( $options[ 'link' ] ) ) {
		$custom_text = esc_html( $options['link'] );
	}

	echo '<input type="text" id="kpfc_custom_link" name="kpfc_settings[link]" value="' . $custom_text . '" style="width:842px;" />';
}



// Build Radio Layout For Chat Image Field
function kpfc_settings_image_callback( $args ) {

  $options = get_option( 'kpfc_settings' );

  $radio = '';
	if( isset( $options[ 'image' ] ) ) {
		$radio = esc_html( $options['image'] );
	}

	$html = '<input type="radio" id="kpfc_settings_image_one" name="kpfc_settings[image]" value="'. $args['option_one'] .'"' . checked( $args['option_one'], $radio, false ) . '/>';
	$html .= ' <label for="kpfc_settings_image_one"> <img src="'. $args['option_one'] .'" class="image-radio"></label> &nbsp;';
	
	$html .= '<input type="radio" id="kpfc_settings_image_two" name="kpfc_settings[image]" value="'. $args['option_two'] .'"' . checked( $args['option_two'], $radio, false ) . '/>';
	$html .= ' <label for="kpfc_settings_image_two"> <img src="'. $args['option_two'] .'" class="image-radio"></label>';

	$html .= '<input type="radio" id="kpfc_settings_image_three" name="kpfc_settings[image]" value="'. $args['option_three'] .'"' . checked( $args['option_three'], $radio, false ) . '/>';
	$html .= ' <label for="kpfc_settings_image_three"> <img src="'. $args['option_three'] .'" class="image-radio"></label>';

	$html .= '<input type="radio" id="kpfc_settings_image_four" name="kpfc_settings[image]" value="'. $args['option_four'] .'"' . checked( $args['option_four'], $radio, false ) . '/>';
	$html .= ' <label for="kpfc_settings_image_four"> <img src="'. $args['option_four'] .'" class="image-radio"></label>';

	$html .= '<input type="radio" id="kpfc_settings_image_five" name="kpfc_settings[image]" value="'. $args['option_five'] .'"' . checked( $args['option_five'], $radio, false ) . '/>';
	$html .= ' <label for="kpfc_settings_image_five"> <img src="'. $args['option_five'] .'" class="image-radio"></label>';

	$html .= '<input type="radio" id="kpfc_settings_image_six" name="kpfc_settings[image]" value="'. $args['option_six'] .'"' . checked( $args['option_six'], $radio, false ) . '/>';
	$html .= ' <label for="kpfc_settings_image_six"> <img src="'. $args['option_six'] .'" class="image-radio"></label>';

	$html .= '<input type="radio" id="kpfc_settings_image_seven" name="kpfc_settings[image]" value="'. $args['option_seven'] .'"' . checked( $args['option_seven'], $radio, false ) . '/>';
	$html .= ' <label for="kpfc_settings_image_seven"> <img src="'. $args['option_seven'] .'" class="image-radio"></label>';

	$html .= '<input type="radio" id="kpfc_settings_image_eight" name="kpfc_settings[image]" value="'. $args['option_eight'] .'"' . checked( $args['option_eight'], $radio, false ) . '/>';
	$html .= ' <label for="kpfc_settings_image_eight"> <img src="'. $args['option_eight'] .'" class="image-radio"></label>';

	$html .= '<input type="radio" id="kpfc_settings_image_nine" name="kpfc_settings[image]" value="'. $args['option_nine'] .'"' . checked( $args['option_nine'], $radio, false ) . '/>';
	$html .= ' <label for="kpfc_settings_image_nine"> <img src="'. $args['option_nine'] .'" class="image-radio"></label>';

	$html .= '<input type="radio" id="kpfc_settings_image_ten" name="kpfc_settings[image]" value="'. $args['option_ten'] .'"' . checked( $args['option_ten'], $radio, false ) . '/>';
	$html .= ' <label for="kpfc_settings_image_ten"> <img src="'. $args['option_ten'] .'" class="image-radio"></label>';

	
	//$html .= '<br><br><b>Custom Chat Image Link: </b><input type="text" id="kpfc_settings_image_eleven" name="kpfc_settings[image]" value="'. $args['option_eleven'] .'" '. checked( $args['option_eleven'], $radio, false ) . ' style="width:680px;"/>';
	//$html .= ' <label for="kpfc_settings_image_eleven"> <img src="'. $args['option_eleven'] .'" class="image-radio"></label>';

	
	echo $html;

}