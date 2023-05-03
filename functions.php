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

function bm_login_logo() { ?>
<style type='text/css'>
#login h1 a, .login h1 a {
/* background-image: url(/wp-content/themes/itp/assets/images/logo.svg); */
height:141px;
width:248px;
background-size: 241px 248px;
background-repeat: no-repeat;
padding-bottom: 30px;
}
 .wp-core-ui #loginform .button-primary ,
 .wp-core-ui #lostpasswordform .button-primary   {
    background: #000;
    border-color: #fff;
    color: #fff;
    text-decoration: none;
    text-shadow: none;
}
.login #loginform label , #login #loginform p , .login p#nav , .login #backtoblog{
    color: #fff;
    text-align: center;
	width: 100%;
}
.login p#nav , .login #backtoblog{
	margin: 0 auto;
    padding: 10px !important;
	width: auto;
}
body {
    background: #000 !important;
}
.login #loginform {
	border: 1px solid #fff;
    box-shadow: 0 1px 3px rgb(0 0 0 / 4%);
    border-radius: 3px;
	background: gray;
}
.login #loginform .button-primary {
    float: unset;
    text-align: center;
    margin: 0 auto;
    width: 100%;
}
.wp-core-ui #loginform .button-primary.focus, 
.wp-core-ui #loginform .button-primary.hover, 
.wp-core-ui #loginform .button-primary:focus, 
.wp-core-ui #loginform .button-primary:hover, 
.wp-core-ui #lostpasswordform .button-primary.hover{
    background: #000000;
    border-color: #fff;
    color: #fff;
}
.login form .input, .login input[type=password], .login input[type=text] {
	margin:10px 0;
}
.login #login_error, .login .message, .login .success {
	border-left: 1px solid #fff;

}
</style>
<?php }
add_action( 'login_enqueue_scripts', 'bm_login_logo' );
function put_my_url(){
return "https://www.bmitpglobalnetwork.org/"; 
}
add_filter('login_headerurl', 'put_my_url');


