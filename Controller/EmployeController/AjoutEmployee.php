<?php

include"GestionEmployye.php";
include"../../Model/Employee.php";
if (isset($_POST['submit']))
{
    $options=[
        'cost'=>12
    ];
    $empc=new GestionEmployye();
    $hashpass=password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
    $employee= new Employee(null,$_POST['nom'],$_POST['prenom'],$_POST['adresse'],
        $_POST['email'],$_POST['tel'],$_POST['sexe'],$_POST['login'],$hashpass);
    $message=$empc->AjoutEmploye($employee);


        if($message=="succes")
        {
            $objet="votre Authentification";
            $contenu="Votre Identifient est :". $_POST['login']."\n\n"."Votre code : ".$_POST['password']."\n\n"."merci !" ;

            mail($_POST['email'],$objet,$contenu);
        }
        header("location:../../View/EspaceAdmin/AjoutEmployee.php?message=$message");


}
?>

