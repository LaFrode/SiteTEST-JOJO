<?php 
$bdd = PDO('mysql:host=localhost;dbname=messagerie;charset=utf8;', 'root', '')
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['message'])){

    }elese{
        echo "Veuillez compléter tous les champs...";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Site</title>
</head>
<body>
    <div id="carte">
        <h1>POTOBOX</h1>
    </div>
    <from method="POST" action="" align="center">
        <input type="text" name="pseudo">
        <br><br>
        <textarea name="message"></textarea>
        <br>
        <input type="submit" name="valider">
</form>
<section id="messages"></section>
</body>
</html>