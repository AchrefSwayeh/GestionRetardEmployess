<?php


include "../EmployeController/GestionEmployye.php";

$gemp=new GestionEmployye();
$tab=$gemp->RecupererEmployee();
echo json_encode($tab);
?>