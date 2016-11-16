<?php
if($_POST["message"]) {
    mail("hello@ariannamarin.us", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
