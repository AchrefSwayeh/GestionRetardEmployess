<?php
session_start();

include"EmployyeRetardController.php";
$empretard=new EmployyeRetardController();
if (isset($_SESSION['codeemp']) && isset($_POST['datej']))
{
    echo $empretard->VerifEmployyeRetardParCodeetDatedeJour($_POST['datej'],$_SESSION['codeemp']);



}

?>