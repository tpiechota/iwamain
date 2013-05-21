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

$activeGallery = "active";

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
                <div class="hero-unit gradient-border gallery-page">
                    <ul class="thumbnails">
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/AncientZiggurat.full.jpg" alt="Ancient Ziggurat" />
                                    <p>
                                        <span class="thumb-heading">Ancient Ziggurat</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/AncientZiggurat.full.jpg" alt="Ancient Ziggurat" />
                                    <p>
                                        <span class="thumb-heading">Ancient Ziggurat</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/AncientZiggurat.full.jpg" alt="Ancient Ziggurat" />
                                    <p>
                                        <span class="thumb-heading">Ancient Ziggurat</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/AncientZiggurat.full.jpg" alt="Ancient Ziggurat" />
                                    <p>
                                        <span class="thumb-heading">Ancient Ziggurat</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/AncientZiggurat.full.jpg" alt="Ancient Ziggurat" />
                                    <p>
                                        <span class="thumb-heading">Ancient Ziggurat</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/AncientZiggurat.full.jpg" alt="Ancient Ziggurat" />
                                    <p>
                                        <span class="thumb-heading">Ancient Ziggurat</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                    </ul>
                    <ul class="thumbnails">
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/AncientZiggurat.full.jpg" alt="Ancient Ziggurat" />
                                    <p>
                                        <span class="thumb-heading">Ancient Ziggurat</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/AncientZiggurat.full.jpg" alt="Ancient Ziggurat" />
                                    <p>
                                        <span class="thumb-heading">Ancient Ziggurat</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/AncientZiggurat.full.jpg" alt="Ancient Ziggurat" />
                                    <p>
                                        <span class="thumb-heading">Ancient Ziggurat</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/AncientZiggurat.full.jpg" alt="Ancient Ziggurat" />
                                    <p>
                                        <span class="thumb-heading">Ancient Ziggurat</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/AncientZiggurat.full.jpg" alt="Ancient Ziggurat" />
                                    <p>
                                        <span class="thumb-heading">Ancient Ziggurat</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/AncientZiggurat.full.jpg" alt="Ancient Ziggurat" />
                                    <p>
                                        <span class="thumb-heading">Ancient Ziggurat</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                    </ul>

                    <div class="pagination pagination-small pagination-centered">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>

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