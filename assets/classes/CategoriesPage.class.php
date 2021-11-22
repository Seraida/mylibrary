<?php

class CategoriesPage
{
    function GetCategoriesNamesFromDB($connection)
    {
        $query = "SELECT * FROM category";
        return mysqli_fetch_all(mysqli_query($connection, $query));
    }
}