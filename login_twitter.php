<?php
/* ****************************************
 * Author: Conor O'Reilly
 * Date: 
 * ref: 
 *    http://net.tutsplus.com/tutorials/php/how-to-authenticate-users-with-twitter-oauth/
 8
 * *************************************** */

define("MY_INC_CODE", 1);

session_start();
/*
 * Set up a constant to your main application path
 */

define("APPLICATION_PATH", "app");
define("TEMPLATE_PATH", APPLICATION_PATH . "/view");
define("LIBRARY_PATH", "lib");

require_once(APPLICATION_PATH . '/inc/twitteroauth.php');
require (APPLICATION_PATH . '/inc/app_tokens_twitter.inc.php');

// TO DO

// The TwitterOAuth instance
$twitteroauth = new TwitterOAuth($consumer_key, $consumer_secret);

// Requesting authentication tokens, the parameter is the URL we will be redirected to
$request_token = $twitteroauth->getRequestToken('http://mtg.webmojo.eu/twitter.php');

// Saving them into the session
$_SESSION['oauth_token'] = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

$_SESSION['access_token'] = $_GET['oauth_verifier'];

if(!empty($_GET['oauth_verifier']) && !empty($_SESSION['oauth_token']) && !empty($_SESSION['oauth_token_secret'])){  
    // We've got everything we need 
	header('Location: twitter.php');
	
} else {  
    // Something's missing, go back to square 1  
    header('Location: login_twitter.php');  
} 

	
// If everything goes well..
if($twitteroauth->http_code==200){

    // Let's generate the URL and redirect
    $url = $twitteroauth->getAuthorizeURL($request_token['oauth_token']);
	
    header('Location: '. $url);

} else {
    // It's a bad idea to kill the script, but we've got to know when there's an error.
    die('Something wrong happened.');
}

?>