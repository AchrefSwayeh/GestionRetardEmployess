<?php

include "ChechkOutController.php";
include"../../Model/CheckOut.php";
if(isset($_POST['datej']) && isset($_POST['code']))
{   $check=new ChechkOutController();
    $modelcheckout=new CheckOut(null,$_POST['datej'],$_POST['code']);
    echo  $check->AjoutCheckOut($modelcheckout);

}

?>