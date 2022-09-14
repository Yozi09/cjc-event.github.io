<?php 
try{
    $conn=new PDO("mysql:host=localhost;dbname=societe",'root','');
}
catch(Exeption $a){
    die ("Erreur au niveau de base de donnée");
}
?>