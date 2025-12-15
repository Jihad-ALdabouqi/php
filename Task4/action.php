<?php
session_start();

if (isset($_POST['add'])) {

    $task = trim($_POST['task']);

   
    if ($task != "") {
        $_SESSION['tasks'][] = $task;
    }
}


header("Location: index.php");
exit;
