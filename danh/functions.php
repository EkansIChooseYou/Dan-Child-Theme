<?php
/**
 *  child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */
add_filter( 'generate_copyright','tu_custom_copyright' );
function tu_custom_copyright() {
    ?>
<!-- blank copyright --> TEST
    <?php
}


	
function wpcode_snippet_replace_howdy( $wp_admin_bar ) {
	// Edit the line below to set what you want the admin bar to display intead of "Howdy,".
	$new_howdy = 'Welcome,';
	$my_account = $wp_admin_bar->get_node( 'my-account' );
	$wp_admin_bar->add_node(
		array(
			'id'    => 'my-account',
			'title' => str_replace( 'Howdy,', $new_howdy, $my_account->title ),
		)
	);
}
add_filter( 'admin_bar_menu', 'wpcode_snippet_replace_howdy', 25 );
