<?php  session_start(); ?>
<html>

<head>
    <link rel="stylesheet" href="../../View/css/bootstrap.min.css">
    <STYLE>
          #sup{
              color: white;
          }
    </STYLE>
</head>
<body>
<?php


include "GestionEmployye.php";
include"../../Model/Employee.php";
//include "../../Connection/BD.php";



/* //$employe   = new Employee("1","imed","hleli","rue singapour","imedhleli@gmail.com","26554142","M","imed.hl","imed@12");

//print_r($gemp->RecupererEmployee());echo  "<br/>";

print_r($t);
echo "<br/>";*/
/*************************************  GESTION EMPLOYEE TEST  ************************************/
$gemp= new GestionEmployye();
$t=array();
$t=$gemp->RecupererEmployee();
$n=count($t);
//echo $gemp->AjoutEmploye();
$options=[
    'cost'=>12
];
echo $hashpass=password_hash("test1234****",PASSWORD_BCRYPT,$options);
echo "<br>"."**************"."<br>";

//$c='$cJOsDxHDLV3X6FuXTwfH722O88peZhcODQzstGwbgVgOo';
if(password_verify('test1234****','$2y$10$l353LOUxUXYZ3Nugo5SOF./gV8ZVSCW3tAdff9RuUI33.RiRWUEk2
')) echo "vrai"; else echo"faux" ;

$vcon = "" ;
$bd= new BD();
$options=[
    'cost'=>12
];
// $hashpass=password_hash($mdp,PASSWORD_BCRYPT,$options);
$login="aziz.j";
$req=$bd->getConnection()->prepare('select * from employee where login = :login');
$req->execute(array(
    "login"=>$login

));



//var_dump($req->rowCount());exit();
if ($req->rowCount()>0)
{
    $donne=$req->fetch();
    $hashpdfrombd=$donne['mdp'];
    echo"*************";

    if(password_verify('test1234****',$donne['mdp']))
    {
        $vcon="succes";
    }
    else{
        $vcon="login ou mot de passe est incorect !";
    }

}
else {
    $vcon="login ou mot de passe est incorect ! ";
}






?>
<form>


    <table border="1">
        <thead>
        <tr>
            <th> Code </th>
            <th> Nom </th>
            <th> Prenom </th>
            <th> Adresse </th>
            <th> Email </th>
            <th> Tel </th>
            <th> Sexe </th>
            <th> Identifient </th>
            <th> Mot de Passe </th>
            <th>Modifier</th>
            <th>Suprimer</th>
        </tr>


        </thead>
        <?php
        for($i=0;$i<$n;$i++)
        {?>
            <tr>

                <td><?php  echo $t[$i]['codeemp'] ?></td>
                <td><?php  echo $t[$i]['nom'] ?></td>
                <td><?php  echo $t[$i]['prenom'] ?></td>
                <td><?php  echo $t[$i]['Adresse'] ?></td>
                <td><?php  echo $t[$i]['email'] ?></td>
                <td><?php  echo $t[$i]['tel'] ?></td>
                <td><?php  echo $t[$i]['sexe'] ?></td>
                <td><?php  echo $t[$i]['login'] ?></td>
                <td><?php  echo $t[$i]['mdp'] ?></td>
                <td> <button class="btn btn-success"><a style = "color : white" href="ModifierEmploye.php?code=<?php  echo  $t[$i]['codeemp'] ?>">Modifier</a></button>   </td>

                <td> <button class="btn btn-danger"> <a id = "sup" onclick="return confirm('Voules est vous Suprimmer')" href="SuprimerEmployye.php?code=<?php  echo  $t[$i]['codeemp'] ?>" >Suprimer</a></button>   </td>

            </tr>

            <?php
        }
        ?>



    </table>
</form>



</body>
</html>






<?php


echo "<br/>";
//echo $gemp->ModifierEmploye();
print_r($gemp->RecupererEmployeeParID(8));
//echo $gemp->verifCode(9);

//echo  $bd->getConnection();
echo $gemp->VerifConnection("yahya.ss","yahya@9655")."<br/>";
$emp= new Employee(null,"Ahlem","ban salah ","souse rue riadh","ahlem.bns@gmail.com","26665412","F","ahlm.nbns","test@1234");
//echo $gemp->AjoutEmploye($emp);
echo "<br/>";

echo json_encode($gemp->RecupererEmployee());echo "<br/>";

$_SESSION['code']="1234";
echo $_SESSION['code'];

echo "<br/>";
echo $gemp->CodeEmpParLogin("yahya.ss");





?>