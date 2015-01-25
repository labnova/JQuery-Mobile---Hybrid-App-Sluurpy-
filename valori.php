<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


$id=$_POST['id'];

$conn= mysqli_connect('localhost', 'root', 'pianta', 'oriente' );
if(!$conn) { echo "ci sono problemi con la connessione al database di Sluurpy" .mysqli_error($conn);}

$query= mysqli_query($conn,'SELECT * FROM w1ebi_content WHERE asset_id='.$id.'');
if (!$query) {echo "ci sono problemi con l'invio della richiesta " .mysqli_error($conn); }

while($row=mysqli_fetch_assoc($query)) {
	echo '<h1>'.$row['title'].'</h1><br/>';
	echo $row['introtext'];
	echo '<p>'.$row['created'].'</p><br/>';
}


?>