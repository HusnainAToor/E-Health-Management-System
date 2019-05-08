<?php

if(!isset($_SESSION['UserId'])) {
    header('Location: index.php');
}
?>