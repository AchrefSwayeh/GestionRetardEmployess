<?php

/*$plusm=15;
$timesortie=new DateTime('06:00:00');
$timesortie->add(new DateInterval('PT'.$plusm.'M'));
echo $timesortie->format('H:i:s');*/
$timesortie=new DateTime('18:00:00');
$timesortieemp=new DateTime('11:15:00');
$interval=$timesortieemp->diff($timesortie);
echo $interval->format('%H:%i');



?>