<?php

function getSnows()
{
    $query = "SELECT * FROM snows.snows";
    require_once 'dbConnector.php';
    return executeQuerySelect($query);
}