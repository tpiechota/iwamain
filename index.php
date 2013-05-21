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
    //header("Location:  privateHomeTestCard.php");
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
                <div class="hero-unit gradient-border">
                    <div class="span7">Check out my card decks of the most epic card game ever created and tell me what you think about it...</div>
                    <div class="span5 hero-unit-sign-in">
                        <span>Sign in to see my special and rare card collection</span>
                        <button class="btn btn-warning" type="button" onclick="location.href='login.php'">Sign In</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid mtg-heroes">
            <div class="span1"></div>
            <div class="span2">
                <a class="divlink mtg-heroes-header" href="#"><span class="raquo">&laquo;</span> Mauntains <span class="raquo">&raquo;</span></a>
                <div class="mtg-heroes-img">
                    <a href="gallery.php"><img src="img/mtg-chandra.png" alt="Chandra" /></a>
                    <a href="gallery.php"><div class="label"><img class="mtg-color" src="img/mtg-mauntains.png" alt="Mauntains" /></div></a>
                </div>
            </div>
            <div class="span2">
                <a class="divlink mtg-heroes-header" href="#"><span class="raquo">&laquo;</span> Islands <span class="raquo">&raquo;</span></a>
                <div class="mtg-heroes-img">
                    <a href="gallery.php"><img src="img/mtg-jace.png" alt="Jace" /></a>
                    <a href="gallery.php"><div class="label"><img class="mtg-color" src="img/mtg-islands.png" alt="Islands" /></div></a>
                </div>
            </div>
            <div class="span2">
                <a class="divlink mtg-heroes-header" href="#"><span class="raquo">&laquo;</span> Swamps <span class="raquo">&raquo;</span></a>
                <div class="mtg-heroes-img">
                    <a href="gallery.php"><img src="img/mtg-liliana.png" alt="Liliana" /></a>
                    <a href="gallery.php"><div class="label"><img class="mtg-color" src="img/mtg-swamps.png" alt="Swamps" /></div></a>
                </div>
            </div>
            <div class="span2">
                <a class="divlink mtg-heroes-header" href="#"><span class="raquo">&laquo;</span> Plains <span class="raquo">&raquo;</span></a>
                <div class="mtg-heroes-img">
                    <a href="gallery.php"><img src="img/mtg-ajani.png" alt="Ajani" /></a>
                    <a href="gallery.php"><div class="label"><img class="mtg-color" src="img/mtg-plains.png" alt="Plains" /></div></a>
                </div>
            </div>
            <div class="span2">
                <a class="divlink mtg-heroes-header" href="#"><span class="raquo">&laquo;</span> Forests <span class="raquo">&raquo;</span></a>
                <div class="mtg-heroes-img">
                    <a href="gallery.php"><img src="img/mtg-garruk.png" alt="Garuk" /></a>
                    <a href="gallery.php"><div class="label"><img class="mtg-color" src="img/mtg-forests.png" alt="Forests" /></div></a>
                </div>
            </div>
            <div class="span1"></div>
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