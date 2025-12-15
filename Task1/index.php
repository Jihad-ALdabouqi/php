<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST["email"];
    $password = $_POST["Password"];
}
echo "E-mail : " . $email . "<br>";
echo "Password :  ". $password ."<br>";
?>