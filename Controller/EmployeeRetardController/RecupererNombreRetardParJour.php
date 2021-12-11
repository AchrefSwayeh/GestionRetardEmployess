<?php

include"EmployyeRetardController.php";
if(isset($_POST['code']))
{


    $empretard=new EmployyeRetardController();
    echo $empretard->CalculRetardParJour($_POST['code']);
}

?>