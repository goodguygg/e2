<?php

session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $dice1 = $results['dice1'];
    $dice2 = $results['dice2'];
    $dice_sum = $results['dice_sum'];
    $guess = $results['guess'];
    $outcome = $results['outcome'];

    $_SESSION['results'] = null;
}

require 'index-view.php';