<?php

//if(isset($_POST['submit'])) { 

error_reporting(E_ALL);
ini_set('display_errors', 1);


$conn= mysqli_connect('localhost', 'root', 'pianta', 'oriente');

if(!$conn) { echo "ci sono problemi con la connessione al database di Sluurpy" .mysqli_error($conn);}

$nome= $_POST['nome'];
$cognome= $_POST['cognome'];
$mail=$_POST['mail'];
$provincia=$_POST['provincia'];
$citta= $_POST['citta'];

var_dump($nome);


$query = "INSERT INTO newsletter(nome, cognome, mail, provincia, citta) ";
$query .= " VALUES ('{$nome}','{$cognome}','{$mail}','{$provincia}','{$citta}')";

$risultato= mysqli_query($conn, $query);

if(!$risultato) {echo "ci sono problemi con il servizio, si prega di provare pi&ugrave tardi " .mysqli_error($conn);}
else { ?> 

	
<section id="registrazione"  class="header_default footer_default"  data-role='page'>

    
    <div data-role="content">
        <h2>Grazie per esserti iscritto, <? echo $nome; ?></h2>
        Riceverai la nostra newsletter all'indirizzo <strong><? echo $mail; ?></strong>.
    </div>
</div>
</section>

<?php

	} //if-risultato

//} //submit

?>