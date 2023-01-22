<?php
$host ="localhost";
$username ="root";
$password ="";
$database ="application_web";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$tel = $_POST["tel"];
$mail = $_POST["mail"];

  $mysqli = new mysqli($host, $username, $password, $database );
  if($mysqli->connect_error )
  {
    die('error :(' . $mysqli->connect_error .')' . $mysqli->connect_eror);
  }
  $request = $mysqli->prepare("INSERT INTO register (nom, prenom, tel, mail)  VALUES(?,?,?,?)");
  
  $request->bind_param('ssss' ,$nom, $prenom, $tel, $mail);
  $request->execute();
  $mysqli->close();

  $mysqli = new mysqli($host, $username, $password, $database);
  $mysqli->set_charset("utf8");
  $request = "SELECT * FROM register ";
  $resultat = $mysqli->query($request);
  while($ligne = $resultat->fetch_assoc()) {
    echo $ligne['nom'].''.$ligne['prenom'].''.$ligne['tel'].''.$ligne['mail'].'<br>';
  }

  $mysqli->close();
?>