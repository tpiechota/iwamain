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
                <div class="hero-unit gradient-border social-page">
                    <article>
                        <span class="pull-left"><a height="470" width="300px" class="twitter-timeline"  href="https://twitter.com/developtp"  data-widget-id="319033618410373121">Tweets by @developtp</a></span>

                        <span class="pull-right"><a height="470" width="300px" class="twitter-timeline"  href="https://twitter.com/dailymtg"  data-widget-id="336254358578659328">Tweets by @dailymtg</a></span>

                        <span class="clearfix"></span>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

   <!-- Twitter Widgets -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!-- FOOTER -->
<?php
/*
 * Pull in the public version of the footer
 * contains JQuery pullin and <BODY/><HTML/>
 */
include (TEMPLATE_PATH . "/public/footer.php");
?>