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
require "model/modelUser.php";
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
        require_once 'model/modelUser.php';
        if(checkData($emailCheck,$passwordCheck) == true)
        {
            $_SESSION['user'] = $emailCheck;
            home();
        }
        else
        {
            login();
        }

    }
    require "view/login.php";
}
function register()
{
    if(isset($_POST['emailRegister'])&&isset($_POST['passwordRegister'])&&isset($_POST['pseudoRegister']))
    {
        $emailRegister = $_POST['emailRegister'];
        $passwordRegister = $_POST['passwordRegister'];
        $pseudoRegister = $_POST['pseudoRegister'];
        createUser($emailRegister,$passwordRegister,$pseudoRegister);
        require_once "model/modelUser.php";
    }
    require_once "view/register.php";
}