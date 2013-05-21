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
if(isset($_POST["name"]) && isset($_POST["email"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    $status = "";

    // Email
    $to = "developtp@gmail.com";
    $from = "auto-respond@webmojo.eu";
    $subject = 'Magic The Gathering Assignment - Feedback';
    $subject_confirm = 'Magic The Gathering Assignment - Confirmation';
    $message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Magic The Gathering Assignment - Feedback</title></head><body style="margin:0; font-family: Tahoma, Geneva, sans-serif;background:#333; color: #ddd;"><div style="padding:10px; background:#111; font-size:24px; margin-bottom: 10%"><span><a href="http://mtg.webmojo.eu"><img src="http://mtg.webmojo.eu/img/mtg-logo.png" alt="eLoyals" style="border:none; float:left; width: 25%;"></a></span><span style="margin-left: 20px; color: #F9AC40">Magic The Gathering Assignment - Feedback</span></div><div style="font-family: \'Courier New\', Tahoma, Geneva, sans-serif; padding:24px; font-size:14px;background:#222; width: 70%; margin-left: auto; margin-right: auto;">From: '.$name.'<br />Email: '.$email.'<br /><hr /><br /><br /><br />'.$comment.'</div></body></html>';

    $message_confirm = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Magic The Gathering Assignment - Feedback</title></head><body style="margin:0; font-family: Tahoma, Geneva, sans-serif;background:#333; color: #ddd;"><div style="padding:10px; background:#111; font-size:24px; margin-bottom: 10%"><span><a href="http://mtg.webmojo.eu"><img src="http://mtg.webmojo.eu/img/mtg-logo.png" alt="eLoyals" style="border:none; float:left; width: 25%;"></a></span><span style="margin-left: 20px; color: #F9AC40">Magic The Gathering Assignment - Feedback</span></div><div style="font-family: \'Courier New\', Tahoma, Geneva, sans-serif; padding:24px; font-size:14px;background:#222; width: 70%; margin-left: auto; margin-right: auto;">Hi '.$name.',<br /><hr /><br /><br />You wrote:<br />"<i>'.$comment.'</i>"<br /><br /><br />Thank you for your comment. I will answer to your query as soon as possible.<br /><br />Regards<br />Tomasz Piechota</div></body></html>';

    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";

    $headers_confirm = "From: mtg.webmojo.eu\n";
    $headers_confirm .= "MIME-Version: 1.0\n";
    $headers_confirm .= "Content-type: text/html; charset=iso-8859-1\n";

    if(mail($to, $subject, $message, $headers) && mail($email, $subject_confirm, $message_confirm, $headers_confirm)){
        //echo "OK";
    }else{
        echo 'Something went wrong with the mailing thing.';
    };
    echo "Thank you &#9786;";
    exit();
    //if(){
        //echo 'OK - Confirmation';
    //}else{
        //echo 'Something went wrong with the mailing thing. - Confirmation';
    //}
}

include (TEMPLATE_PATH . "/public/header.php");
?>


<!-- CONTENT -->
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="hero-unit gradient-border contact-page">
                    <article>
                        <div class="contact-form">
                            <form name="contactform" id="contactform"  onsubmit="return false;">
                                <fieldset>                                                            <!-- Form Name -->
                                    <!--<legend>Form Name</legend>-->
                                    <!-- Text input-->
                                        <label class="control-label"></label>
                                            <label for="email"></label>
                                            <input id="email" name="email" placeholder="Email" class="input-xlarge" required="" type="text">
                                    <!-- Text input-->
                                        <label class="control-label"></label>
                                            <label for="name"></label>
                                            <input id="name" name="name" placeholder="Name" class="input-xlarge" required="" type="text">
                                    <!-- Textarea -->
                                        <label class="control-label"></label>
                                            <label for="comment"></label>
                                            <textarea id="comment" name="comment" class="input-xlarge" required="">comment...</textarea>
                                    <!-- Button -->
                                        <label class="control-label"></label>
<!--                                            <a class="btn btn-inverse" id="send">Send</a>-->
                                    <button class="btn btn-inverse" id="send" onclick="sendMail();">Send</button>

                                </fieldset>
                            </form>
                            <span id="status"></span>
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