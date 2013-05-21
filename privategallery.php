<?php
/* ****************************************
 * Author: Conor O'Reilly
 * Date:
 *
 * *************************************** */
session_start();

// If session is not set send to login page
if (!isset($_SESSION['loggedIn']) && !$_SESSION['loggedIn'] == 1)
{
    header("Location:  login.php");
}

define("MY_INC_CODE", 1);

define("APPLICATION_PATH", "app");
define("TEMPLATE_PATH", APPLICATION_PATH . "/view");
define("LIBRARY_PATH", "lib");

include (APPLICATION_PATH . "/inc/config.inc.php");
//include (APPLICATION_PATH . "/inc/db.inc.php");
//include (APPLICATION_PATH . "/inc/functions.inc.php");

include (TEMPLATE_PATH . "/private/header.php");

?>
<!-- main page content ................................. -->
<!-- CONTENT -->
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="hero-unit gradient-border gallery-page">
                    <ul class="thumbnails">
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/CharnelhoardWurm.full.jpg" alt="Charnelhoard Wurm" />
                                    <p>
                                        <span class="thumb-heading">Charnelhoard Wurm</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/CelestialPurge.full.jpg" alt="Celestial Purge" />
                                    <p>
                                        <span class="thumb-heading">Celestial Purge</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/AvenTrailblazer.full.jpg" alt="Aven Trailblazer" />
                                    <p>
                                        <span class="thumb-heading">Aven Trailblazer</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/AshasFavor.full.jpg" alt="Ashas Favor" />
                                    <p>
                                        <span class="thumb-heading">Ashas Favor</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/Countersquall.full.jpg" alt="Countersquall" />
                                    <p>
                                        <span class="thumb-heading">Countersquall</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/Paleoloth.full.jpg" alt="Paleoloth" />
                                    <p>
                                        <span class="thumb-heading">Paleoloth</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                    </ul>
                    <ul class="thumbnails">
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/Nyxathid.full.jpg" alt="Nyxathid" />
                                    <p>
                                        <span class="thumb-heading">Nyxathid</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/Malfegor.full.jpg" alt="Malfegor" />
                                    <p>
                                        <span class="thumb-heading">Malfegor</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/Kranioceros.full.jpg" alt="Kranioceros" />
                                    <p>
                                        <span class="thumb-heading">Kranioceros</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/Kaleidostone.full.jpg" alt="Kaleidostone" />
                                    <p>
                                        <span class="thumb-heading">Kaleidostone</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/ApocalypseHydra.full.jpg" alt="Apocalypse Hydra" />
                                    <p>
                                        <span class="thumb-heading">Apocalypse Hydra</span>
                                    </p>
                                </a>
                            </article>
                        </li>
                        <li class="span2">
                            <article class="thumbnail">
                                <a href="#">
                                    <img src="img/cards/ArmillarySphere.full.jpg" alt="Armillary Sphere" />
                                    <p>
                                        <span class="thumb-heading">Armillary Sphere</span>
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
<!-- main page  end .................................... -->
<!-- FOOTER -->
<?php include (TEMPLATE_PATH . "/private/footer.php"); ?>