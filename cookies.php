<?php
$userName = "Haris";
setcookie("user_identity", $userName, time() + 3600, "/"); 

if (isset($_COOKIE["user_identity"])) {
    $user = $_COOKIE["user_identity"];
    echo "Welcome back, $user!";
} else {
    echo "Please provide your identity.";
}
