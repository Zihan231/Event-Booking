<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once("../Model/Events.php");

if(isset($_GET['search']) && !empty($_GET['search'])) {
    $searchTerm = htmlspecialchars(trim($_GET['search']));
    $events = searchEvents($searchTerm);
} else {
    $events = getAllEvents();
}

?>