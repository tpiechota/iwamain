<?php
/* ****************************************
 * Author: Conor O'Reilly
 * Date:
 *
 * *************************************** */

/*
 * Session is started if logged in already then
 * go straight to the private home page otherwise
 * asked to login or can browse content that does
 * not require login
 */

session_start();

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1)
{
    header("Location:  privategallery.php");
    //header("Location: privateHome.php");
}

/*
 * Create a constant to be checked by include files
 * this ensures the include files cannot be called on their own
 */

define("MY_INC_CODE", 1);

/*
 * Set up a constant to your main application path
 */

define("APPLICATION_PATH", "app");
define("TEMPLATE_PATH", APPLICATION_PATH . "/view");
define("LIBRARY_PATH", "lib");

/*
 * Before pull in header set a variable that is
 * associated with only this page. This variable
 * will be used to turn on the menu item to show
 * which page is currently selected, see menu.php
 * class="<?php echo $activeIndex ?>" is on the
* menu item line if variable not set class=""
* if set then class="active" and bootstrap highlights
* that item
*/

$activeIndex = "active";

/*
* Pull in the configuration files
* As these files are inside php tags their data
* is not written within the presented HTML page
* this ensure that tokens, passwords, usernames etc
* are securely used
*/

include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");
//include (APPLICATION_PATH . "/inc/functions.inc.php");


/*
* Pull in the header component of the HTML page
* This header is used for all pages that do not
* require a login e.g. publically accessible pages
* Contains <HTML><HEADER></HEADER><BODY> and menu ..
*/

include (TEMPLATE_PATH . "/public/header.php");

?>

<!-- CONTENT -->
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="hero-unit gradient-border login-page">
<!--                    <div><p>Sign In to see my private collection. </p></div>-->
                    <div class="error">
                        <?php
                        if( $_GET != NULL )
                        {
                            $loginStatus = $_GET['login'];
                            if($loginStatus == 'vfail')
                            {echo '<p>Invalid username or password</p>';}
                            elseif($loginStatus == 'efail')
                            {echo '<p>No username or password</p>';}
                            elseif($loginStatus == 'CSRFfail')
                            {echo '<p>The Facebook state does not match. You may be a victim of CSRF.</p>';}
                            else
                            {echo '<p>' . $loginStatus . '</p>';}
                        }
                        ?>
                    </div>
                    <div>
                        <ul>
                            <li><img src="img/mtg-mauntains-ico.png" alt="Mauntains" /></li>
                            <li><img src="img/mtg-islands-ico.png" alt="Islands" /></li>
                            <li><img src="img/mtg-swamps-ico.png" alt="Swamps" /></li>
                            <li><img src="img/mtg-plains-ico.png" alt="Plains" /></li>
                            <li><img src="img/mtg-forests-ico.png" alt="Forests" /></li>
                        </ul>

                    </div>
                    <article>
                        <div class="login-form">
                            <form action="login_database.php" method="POST">
                                <fieldset>                                                            <!-- Form Name -->
                                    <!--<legend>Form Name</legend>-->
                                    <!-- Text input-->
                                        <label class="control-label"></label>
                                            <label for="username"></label>
                                            <input id="username" name="username" placeholder="Username" class="input-xlarge" required="" type="text">
                                    <!-- Text input-->
                                        <label class="control-label"></label>
                                            <label for="password"></label>
                                            <input id="password" name="password" placeholder="Password" class="input-xlarge" required="" type="text">

                                    <!-- Button -->
                                        <label class="control-label"></label>
                                    <button type="submit" class="btn btn-inverse" id="signin">Sign In</button><br />
                                </fieldset>
                            </form>
                        </div>
                        <div class="social-login">
                            <span class="span4"><a class="facebook-login" href="login_facebook.php"></a></span>
                            <span class="span4"><a class="twitter-login" href="login_twitter.php"></a></span>
                        <!--<span class="span4"><a class="google-login" href="login_google.php"></a></span>-->
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER -->
<?php
/*
 * Pull in the public version of the footer
 * contains JQuery pullin and <BODY/><HTML/>
 */
include (TEMPLATE_PATH . "/public/footer.php");
?>