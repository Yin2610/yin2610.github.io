<?php
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");
$name = $_POST['txtName'];
$email = $_POST['txtEmail'];
$message = $_POST['txtMsg'];

$to = "yma.meemee@gmail.com";
$subject = $name. "sent you a message from your portfolio website.";
$fullMsg = "Name: " .$name. "\nEmail: " .$email. "\nMessage: " .$message;
$sender = "yinmoeaye2610@gmail.com";

if(mail($to, $subject, $fullMsg, $sender))
{
    echo "<script type='text/javascript'>
    window.alert('Your message is sent successfully. Thanks.');
    window.location.replace('./index.html');
    </script>";
}
else
{
    echo "<script>window.alert('Your message couldn't be sent.');
    window.location.replace('./index.html');
    </script>";
}
?>