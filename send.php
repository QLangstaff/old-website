Thanks for your message!

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "qali.langstaff@hotmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved a new message from ".$name.".\n\n".$message;


    mail($mailTo, $txt, $headers);
    header("Location: send.php?mailsend");
}
?>
