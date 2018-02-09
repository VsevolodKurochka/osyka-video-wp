<?php
add_action( 'admin_menu', 'add_admin_menu' );
add_action( 'admin_init', 'settings_init' );


function add_admin_menu(  ) { 
	add_menu_page( 'Options Page', 'Options Page', 'manage_options', 'videooperator', 'options_page' );
}

function contact_info_init() {
	register_setting( 'adventure_contact_info_setting', 'contact_info_setting' );

	add_settings_section(
		'adventure_contact_info_section', 
		__( 'Contact Info', 'v' ), 
		'', 
		'adventure_contact_info_setting'
	);

	add_settings_field( 
		'facebook', 
		__( 'Facebook', 'v' ), 
		'v_text_field_render', 
		'adventure_contact_info_setting',
		'adventure_contact_info_section',
		array(
			'name'			=> 'facebook',
			'option'		=> 'contact_info_setting',
			'classname'	=> ''
		)
	);

	add_settings_field( 
		'instagram', 
		__( 'Instagram', 'v' ), 
		'v_text_field_render', 
		'adventure_contact_info_setting',
		'adventure_contact_info_section',
		array(
			'name'			=> 'instagram',
			'option'		=> 'contact_info_setting',
			'classname'	=> ''
		)
	);
}


function settings_init(){
	contact_info_init();
}

function v_text_field_render($array){
	$options = get_option( $array['option'] );

	$field_class = isset($array['classname']) ? $array['classname'] : '';


	$field_value = isset($options[$array['name']]) ? $options[$array['name']] : '';

	?>
	
	<input 
		type='text' 
		class="<?php echo $field_class; ?>" 
		name='<?php echo $array['option'] ?>[<?php echo $array['name'] ?>]' 
		value='<?php echo $field_value; ?>'
	>

	<?php
}


function options_page(  ) { 

	?>

	<h1>Options Page</h1>

	<hr>

	<?php settings_errors(); ?>

	<form action='options.php' method='post'>

		
		<?php

			settings_fields( 'adventure_contact_info_setting' );
      do_settings_sections( 'adventure_contact_info_setting' );


      submit_button();

		?>

	</form>
	<?php

}

?>