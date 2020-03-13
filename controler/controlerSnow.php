<?php

function showSnowAll()
{
    require "model/modelSnow.php";
    $allSnows = getSnows();
    require_once "view/Snows.php";
}