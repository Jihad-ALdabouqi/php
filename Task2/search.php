<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $url = $_POST['url'] ?? "";
    $url = trim($url);


    if (!preg_match("/^https?:\/\//", $url)) {
        $url = "http://" . $url;
    }

    header("Location: $url");
    exit;
}