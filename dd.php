<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css.css">
    <script src="javas.js"></script>
    <style>
        form{
            margin-top:300px;
            margin-left:400px;
            width:500px;
            background-color:black;
            color:white;
        }
        
        
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <img width="100%" src="rr.jpeg" alt=""> -->
    <form action='dd.php' method="post">
        <fieldset>
            <legend><strong>Inscription</strong></legend>
            <table>
                <tr>
                    <td>Nom:</td>
                    <td><input size='25'  required placeholder="Saisir votre nom" type="text" onblur='veri()' name="nom" id='nom' ></td>
                </tr>
                <tr>
                    <td>Prenom:</td>
                    <td><input size='25' required placeholder="Saisir votre prenom" type="text" onblur='veri()' name="prenom" id='prenom'></td>
                </tr>
                <tr>
                    <td>Tel:</td>
                    <td><input size='25' required placeholder='Saisir votre numero de telephone' onblur='veri()' type="text" id="tel" name="tel"></td>
                </tr>
                <tr>
                    <td><input type="submit" disabled   name='btn' id='btn' value="Valider"> <input type="reset"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php 
    if(isset($_POST['btn'])){
        include "catch.php";
        $result=$conne->query("select * from inscrit");
        $b=false;
        while($ligne=$result->fetch()){
            if($ligne['telephone']!=$_POST['tel']){
                $b=false;
            }
            if($ligne['telephone']==$_POST['tel']){
                $b=true;
                break;
            }
        }
        if($b==false){
            $conne->exec('insert into inscrit values("'.$_POST['nom'].'","'.$_POST['prenom'].'","'.$_POST['tel'].'")');
            ?>
            <script>
                 alert("votre inscription est validé.")
            </script>
            <?php
        }
        if($b==true){
            ?>
            <script>
                alert('le numero de telephone que vous avez saisie existe déja.')
            </script>
            <?php
        }
    }
        
    ?>
</body>
</html>