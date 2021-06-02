<?php
    session_start();

    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = "ru";
    } else if (isset($_SESSION['lang']) && !empty($_GET['lang'])) {
        if ($_GET['lang'] == "en") {
            $_SESSION['lang'] = "en";
        } else {
            $_SESSION['lang'] = "ru";
        }
    }
    $lang = $_SESSION['lang'];
    $langconst = parse_ini_file("lang_$lang.ini");

    echo "Choose language:". $_SESSION['lang'];
?>