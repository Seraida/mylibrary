<?php


session_start();
require_once '/OpenServer/domains/library/vendor/connection.php';
require_once '/OpenServer/domains/library/assets/classes/CategoriesPage.class.php';

$categoryPage = new CategoriesPage();
$categories = $categoryPage->GetCategoriesNamesFromDB($connect);