<?php
session_start();


include"CheckInControlle.php";

if (isset($_SESSION['codeemp']) && isset($_POST['datej']))
{
    $checkin=new CheckInControlle();

    $id=$checkin->RecupererIdEmployeChechInParCodeEmpEtDatedejour($_POST['datej'],$_SESSION['codeemp']);
    $_SESSION['idcheck']=$id;

    $dateArivage=$checkin->RecupererDateEntreEmployeeCheckInParID($id);
    $timee_depart=$checkin->RecupererTime_depart();
    $duree=$checkin->RetournerDureeDeRetardEnMinute($timee_depart,$dateArivage);
    $_SESSION['duree']=$duree;
    echo $duree;




}
?>