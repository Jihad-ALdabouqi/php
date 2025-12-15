<?php
setcookie(
    "user",
    "Jihad",
    time() + 3600, 
    "/",         
    "",           
    false,        
    true          
);

echo "Cookie Created";
?>
<?php
foreach ($_COOKIE as $name => $value) {
    echo "$name : $value <br>";
}
?>
<?php
setcookie("user", "", time() - 3600, "/");
echo "Cookie Deleted";
?>
