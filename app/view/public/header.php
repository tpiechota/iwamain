<?php
    $address = $_SERVER["PHP_SELF"];
    $parts = Explode('/', $address);
    $page = $parts[count($parts) - 1];
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="eLoyals">
    <meta name="author" content="Tomasz Piechota">
    <title>Tomasz Piechota - IWA2 Main Assignment</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/magic_the_gathering_ico.png">
<script>
function sendMail(){
    var name = _("name").value;
    var email = _("email").value;
    var comment = _("comment").value;

    var status = _("status");

    if(name == "" || email == "" || comment == ""){
        status.innerHTML = "Fill out all of the form data";
    } else {
        _("send").disabled = false;
        status.innerHTML = '<img src="img/spinner.png" alt="" />';
        var ajax = ajaxObj("POST", "contact.php");

        ajax.onreadystatechange = function() {
            if(ajaxReturn(ajax) == true) {
                if(ajax.responseText != "Thank you &#9786;"){
                    status.innerHTML = ajax.responseText;
                    _("contactform").disabled = false;
                } else {
                    <!--window.scrollTo(0,0);-->
                    _("status").innerHTML = "Thank you &#9786;";
                }
            }
        }

        ajax.send("name="+name+"&email="+email+"&comment="+comment);
    }
}
</script>
</head>

<body>
<div class="wrapper">
    <?php
          include "menu.php";