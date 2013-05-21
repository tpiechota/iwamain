<?php
/* ****************************************
 * Author: Conor O'Reilly
 * Date: 
 *
 * *************************************** */

/*
 * Checks that the constant is defined this include
 * will only run if it recieves the defined constent
 */
defined('MY_INC_CODE') or die('Access to this file is restricted');

/* ****************************************
 *	THE MAIN CONTENT OF THE PAGE IS BELOW
 *
 *  The HTML headers and footers are in
 *  include files that are pulled in here
 *  The HTML below is already within a BOOTSTRAP
 *  container DIV
 *
 * **************************************** */

?>
 
    <!-- CONTENT -->
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="hero-unit gradient-border">
                    <div class="span7">Check out my card decks of the most epic card game ever created and tell me what you think about it...</div>
                    <div class="span5 hero-unit-sign-in">
                        <span>Sign in to see my special and rare card collection</span>
                        <button type="button" class="btn btn-warning pull-right" type="button" data-toggle="modal" data-target="#SignInModal">Sign In</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid mtg-heroes">
            <div class="span1"></div>
            <div class="span2">
                <a class="divlink mtg-heroes-header" href="#"><span class="raquo">&laquo;</span> Mauntains <span class="raquo">&raquo;</span></a>
                <div class="mtg-heroes-img">
                    <a href="index.html"><img src="img/mtg-chandra.png" alt="Chandra" /></a>
                    <a href="gallery.html"><div class="label"><img class="mtg-color" src="img/mtg-mauntains.png" alt="Mauntains" /></div></a>
                </div>
            </div>
            <div class="span2">
                <a class="divlink mtg-heroes-header" href="#"><span class="raquo">&laquo;</span> Islands <span class="raquo">&raquo;</span></a>
                <div class="mtg-heroes-img">
                    <a href="index.html"><img src="img/mtg-jace.png" alt="Jace" /></a>
                    <a href="gallery.html"><div class="label"><img class="mtg-color" src="img/mtg-islands.png" alt="Islands" /></div></a>
                </div>
            </div>
            <div class="span2">
                <a class="divlink mtg-heroes-header" href="#"><span class="raquo">&laquo;</span> Swamps <span class="raquo">&raquo;</span></a>
                <div class="mtg-heroes-img">
                    <a href="index.html"><img src="img/mtg-liliana.png" alt="Liliana" /></a>
                    <a href="gallery.html"><div class="label"><img class="mtg-color" src="img/mtg-swamps.png" alt="Swamps" /></div></a>
                </div>
            </div>
            <div class="span2">
                <a class="divlink mtg-heroes-header" href="#"><span class="raquo">&laquo;</span> Plains <span class="raquo">&raquo;</span></a>
                <div class="mtg-heroes-img">
                    <a href="index.html"><img src="img/mtg-ajani.png" alt="Ajani" /></a>
                    <a href="gallery.html"><div class="label"><img class="mtg-color" src="img/mtg-plains.png" alt="Plains" /></div></a>
                </div>
            </div>
            <div class="span2">
                <a class="divlink mtg-heroes-header" href="#"><span class="raquo">&laquo;</span> Forests <span class="raquo">&raquo;</span></a>
                <div class="mtg-heroes-img">
                    <a href="index.html"><img src="img/mtg-garruk.png" alt="Garuk" /></a>
                    <a href="gallery.html"><div class="label"><img class="mtg-color" src="img/mtg-forests.png" alt="Forests" /></div></a>
                </div>
            </div>
            <div class="span1"></div>
        </div>
    </div>
</div>
<!-- FOOTER PAGE -->