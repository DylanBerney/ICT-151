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
    $check = false;
    $query = "SELECT userPsw FROM snows.users where userEmailAddress = '$emailCheck' ";
    require_once 'dbConnector.php';
    $queryResult = executeQuerySelect($query);
    $hashedPsw = $queryResult[0]['userPsw'];
    $check = password_verify($passwordCheck,$hashedPsw);
   return $check;
}

function createUser($emailRegister,$passwordRegister,$pseudoRegister)
{
    $userHashPsw = password_hash($passwordRegister,PASSWORD_ARGON2I);
    $queryCreateUser = "INSERT INTO users (users.userEmailAddress,users.userPsw,users.pseudo) VALUES ('$emailRegister','$userHashPsw','$pseudoRegister')";
    require_once 'dbConnector.php';
    executeQueryInsert($queryCreateUser);
}
