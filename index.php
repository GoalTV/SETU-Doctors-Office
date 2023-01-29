<?php

/**
*     Index Page.
*     Project for South East Technological University
*     @Janusz Czeropski C00176885@itcarlow.ie 
*     2023
*/

//Disallow Search Engine
if (!empty($_SERVER['HTTP_USER_AGENT']) and preg_match('~(bot|crawl)~i', $_SERVER['HTTP_USER_AGENT'])) {

    echo 'Sorry No Bot Allowed On This Project';

 }

//Load Template
require_once  $_SERVER['DOCUMENT_ROOT'].'/inc/template.php';

?>