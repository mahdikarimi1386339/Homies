<?php
// simple_greeting.php

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"] ?? "Guest");
    $greeting = "Hello, $name! Welcome to our website.";
} else {
    $greeting = "Welcome! Please enter your name below.";
}
?>
