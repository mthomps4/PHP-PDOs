<?php

require_once('database.php');

if(!empty($_GET['id'])){
  $film_id = intval($_GET['id']);

  try{
    $results = $db->prepare('SELECT * FROM film WHERE film_id= ?');//PREPARES Query all information from film where film id = Anchor clicked form index.php
    $results->bindParam(1, $film_id);
    $results->execute();
  }catch(Exception $e){
    echo $e->getMessage();
    die();
  }

  $film = $results->fetch(PDO::FETCH_ASSOC); //fetch single film data
  if($film == FALSE){
    echo "SORRY, A FILM COULD NOT BE FOUND WITH THE PROVIDED ID.";
    die();
  }
}



?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <title>PHP Data Objects</title>
  <link rel="stylesheet" href="style.css">

</head>

<body id="home">

  <h1>Sakila Sample Database</h1>

  <h2>
    <?php
    echo $film["title"] . "<br>";
    print_r($film);
    ?>

  </h2>



</body>

</html>
