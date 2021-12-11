<?php

include"GestionEmployye.php";
if(isset($_POST['code']))
{
    $gsemp=new GestionEmployye();
    echo json_encode($gsemp->RecupererEmployeeParID($_POST['code']));

}

?>

