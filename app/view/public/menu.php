<!-- MENU -->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span4">
            <img class="mtg-logo" src="img/mtg-logo.png" alt="Magic The Gathering"  />
        </div>
        <div class="span8">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner pull-right">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <!--<a class="brand brand-font"></a>-->
                        <div class="nav-collapse collapse">
                            <ul class="nav pull-left">
                                <li <?php if($page == "index.php"){ echo 'class="active"'; } ?>><a href="index.php"><i class="icon-home icon-white"></i> Home</a></li>
                                <li class="divider-vertical"></li>
                                <li <?php if($page == "galleryhome.php"){ echo 'class="active"'; } ?>><a href="galleryhome.php">Gallery</a></li>
                                <li class="divider-vertical"></li>
                                <li <?php if($page == "social.php"){ echo 'class="active"'; } ?>><a href="social.php">Social</a></li>
                                <li class="divider-vertical"></li>
                                <li <?php if($page == "news.php"){ echo 'class="active"'; } ?>><a href="news.php">News</a></li>
                                <li class="divider-vertical"></li>
                                <li <?php if($page == "about.php"){ echo 'class="active"'; } ?>><a href="about.php">About</a></li>
                                <li class="divider-vertical"></li>
                                <li <?php if($page == "contact.php"){ echo 'class="active"'; } ?>><a href="contact.php">Contact</a></li>
                                <li class="divider-vertical"></li>
                            </ul>
                            <ul class="nav nav-button">
                                <!--<li><button type="button" class="btn btn-warning pull-right" onClick="parent.location='signup.php'">Register</button></li>
                                <li>&nbsp;&nbsp;&nbsp;</li>-->
                                <li><button class="btn btn-warning" type="button" onclick="location.href='login.php'">Sign In</button></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar-inner -->
            </nav>
        </div>
    </div>
</div>