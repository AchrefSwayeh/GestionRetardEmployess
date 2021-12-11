<?php
session_start();

include"EmployyeRetardController.php";
if(isset($_POST['code']))
{


    $empretard=new EmployyeRetardController();
    echo $empretard->CalculRetardParMinute($_POST['code']);
}
?>