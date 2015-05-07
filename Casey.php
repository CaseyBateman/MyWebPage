<?php

$email_to = "scarcit103@gmail.com";

$email_sub = "My Web Page Email";

$your_name = $_POST['your_name'];
$email_add = $_POST['email_add'];
$phone_num = $_POST['phone_num'];
$description = $_POST['description'];

$email = htmlspecialchars($_POST['email_add']);

if (!preg_match("/^[a-zA-Z]*$/", $your_name))
{
    die("Your name is not valid.");
}
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email_add))
{
    die("E-mail address not valid.");
}
if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone_num))
{
    die("Phone Number is not valid.");
}
if (!preg_match("/^([a-zA-Z]*)+([0-9]{9})$/", $description))
{
    die("Your description is not valid.");
}



$email_message = "Hi, I am " . $your_name . "\n" . "This is my information " . "\n" . "Email Address: " . $email_add . "\n" . "Phone Number: " . $phone_num . "Description: " . $description .;

$headers = 'From: '.$email_add."\r\n".
'Reply-To: '.$email_add."\r\n".
'X-Mailer: PHP/' . phpversion();



mail($email_to, $email_sub, $email_message, $headers);

echo "Thanks for sending us your information!";

sleep(5);
Redirect('http://localhost/myWebPage/Casey.html', false);

function Redirect($url, $permanent = false)
{
    if (headers_sent() ===false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }
    exit();
}

?>