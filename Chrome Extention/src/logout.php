<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: popup.html"); // Redirecting To Home Page
}
?>