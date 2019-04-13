<?php
/**
 * Created by PhpStorm.
 * User: timotheecorrado
 * Date: 21/12/2017
 * Time: 12:33
 */

require __DIR__ . "/bootstrap.php";

/*foreach($_COOKIE as $cle => $element)
{
    setcookie($cle, '', time()-3600);
}*/
session_destroy();

header('Location:login.php');