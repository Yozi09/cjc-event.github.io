<?php 
try{
    $conne=new PDO("mysql:host=sql213.eb2a.com;dbname=eb2a_32583345_reda",'eb2a_32583345','California2014',);
}
catch(Exeption $e){
    die ("Erreur au niveau de base de donnée");
}
?>


<!-- <?php 
// try{
//     $conne=new PDO("mysql:host=localhost;dbname=reda",'root','');
// }
// catch(Exeption $e){
//     die ("Erreur au niveau de base de donnée");
// }
?> -->