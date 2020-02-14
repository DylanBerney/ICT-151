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
require "model/model.php";
function home()
{
    $_GET['action'] = "home";
    require "view/home.php";
}

function login()
{
    $_GET['action'] = "login";
    if(isset($_POST['email'])&&isset($_POST['password']))
    {
        $emailCheck = $_POST['email'];
        $passwordCheck = $_POST['password'];
        require_once 'model/model.php';
        checkData($emailCheck,$passwordCheck);
    }
    require "view/login.php";

}