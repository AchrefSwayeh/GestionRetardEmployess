<?php

include"GestionEmployye.php";
if(isset($_POST['code']))
{
    $gsemp=new GestionEmployye();
  echo  $gsemp->SupprimerEmploye($_POST['code']);

}

?>