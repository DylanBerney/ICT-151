<?php
ob_start();

foreach($allSnows as $snows)
{
    echo ("<div>");
    foreach($snows as $values)
    //{*/
/*        foreach ($values as $key => &$value)
        {*/
            //if ($key == "photo")
            {
                echo("<img src='$values'>");
                echo("<br>");
            }
            //else
            //{
                //echo($key . " : ");
                echo($values);
                echo("<br>");
            //}
        //}
        echo("</div>");
    //}
}

$contenu = ob_get_clean();
require_once "gabarit.php";



