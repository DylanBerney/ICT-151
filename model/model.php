<?php
/**
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : 151_2019_ForStudents
 * Created  : 05.02.2019 - 18:40
 *
 * Last update :    [01.12.2018 author]
 *                  [add $logName in function setFullPath]
 * Git source  :    [link]
 */

function checkData($emailCheck,$passwordCheck)
{
    $query = "SELECT userPsw FROM snows.users where userEmailAddress = '$emailCheck' ";
    require_once 'dbConnector.php';
    executeQuerySelect($query);
 //   if ($passwordCheck == $queryResult);


}
