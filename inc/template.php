<?php

/**
 *     Template Layout.
 *     Project for South East Technological University
 *     @Janusz Czeropski C00176885@itcarlow.ie 
 *     2023
 */


/* Used to start a session. */
session_start();

// This line of code is used to connect to the database.
require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/db.con.php');
?>

<html>

<!-- It contains the header of the site. -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/header_tpl.php'); ?>

<body>

    <?php
/* This is a conditional statement that checks if the page is set or not. If it is not set, it will set
the page to home. If it is set, it will set the page to the page that is set. */
    if (!isset($_GET['page']) || $_GET['page'] == '') {
        $page = 'home';
    } else {
        $page = $_GET['page'];
    }

    /* This is a conditional statement that checks if the page is set or not. If it is not set, it will
    set
    the page to home. If it is set, it will set the page to the page that is set. */
    $stmt = $pdo->prepare("SELECT path FROM pages WHERE url = :url");
    $stmt->execute(array(':url' => $page));
    $path = $stmt->fetchColumn();
    if (!$path) {
        $path = '/page/404_tpl.php';
    } else {
        $path = '/page/' . $path . '_tpl.php';
    }
    require($_SERVER['DOCUMENT_ROOT'] . $path);
    ?>

</body>

<!-- /* Including the footer template. */ -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/components/footer_tpl.php'); ?>
</html>