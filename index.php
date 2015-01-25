


<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


$conn= mysqli_connect('localhost', 'root', 'pianta', 'oriente' );
if(!$conn) { echo "ci sono problemi con la connessione al database di Sluurpy" .mysqli_error($conn);}




?>

<html>
<head>
  <meta charset="utf-8">
  <title>Sluurpy</title>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.css" />
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script>

<meta name='viewport' content="width=device-width,initial-scale=1, maximum-scale=1" />
<meta name="apple-mobile-web-app-capable" content='yes'>
<meta name='apple-mobile-web-app-status-bar-style' content="black">
<style type='text/css'>
	li {
		list-style-type: none;
	}


</style>
<script>

	function showPost(id) {
	
	$.post('valori.php', {id:id}, function(data){
		$('#post').html(data);
	});

} //showPost

</script>

</head>
<body>
<section id="intro" data-role='page' data-title="Sluurpy">

			<header data-role="header" data-position="fixed" data-theme="a">
				<a href="#" data-rel="back" class="ui-btn-left ui-btn-icon-left  ui-arrow-icon-l">Indietro</a>
				<a href="#newsletter" class="ui-btn-right ui-icon-info ui-btn-icon-right">Iscriviti</a>
				<h1>Sluurpy</h1>
			</header>

<h1>Hello Sluurpy</h1>

<div data-role='content'>
<?php

if(!$conn) { echo "ci sono problemi con la connessione al database di Sluurpy" .mysqli_error($conn);}

$query= mysqli_query($conn,'SELECT * FROM w1ebi_content');
if (!$query) {echo "ci sono problemi con l'invio della richiesta " .mysqli_error($conn); }
echo '<ul data-role="listview" data-filter="true" data-input="#searchposts">';

	echo '<form class="ui-filterable"><input id="searchposts" data-type="search"></form>';
while($row=mysqli_fetch_assoc($query)) {

	echo '<li>';
	echo '<p id="id" style="display:none;">'.$row['asset_id'].')"</p>';
	echo '<a href="#ricerca" onclick="showPost(' .$row['asset_id'].')">'.$row["title"].'</a>';
	echo '</li>';
	
}

echo "</ul>";


?>

</div>

<!-- <div id="postList"></div> -->


<footer data-role="footer" data-position="fixed" data-theme="b">
		<div  data-role="controlgroup" style="text-align:center; "data-type="horizontal">
			<a href="#intro" class="ui-btn"><i style="margin-right:10px;" class="fa fa-globe"></i>Geo</a>
			<a href="#filtra" class="ui-btn"><i style="margin-right:10px;" class="fa fa-location-arrow"></i>Filtra</a>
			<a href="#ricerca" class="ui-btn"><i style="margin-right:10px;" class="fa fa-search"></i>Ricerca</a>
			<a href="#preferiti" class="ui-btn"><i style="margin-right:10px;" class="fa fa-check"></i>Preferiti</a>
		</div>
</footer>

</section>


<section id="filtra" class="header_default footer_default"  data-role='page' data-title='Filtra' >
	<div data-role="content">
		<h1>Tabelle</h1>

	
		<!-- <div id="miopost"></div> -->

	</div>
</section>



<section id="ricerca" class="header_default footer_default" data-title='Ricerca' data-role='page'>
<h1>Risultati</h1>

	<div data-role="content">


		<div id="post"></div>

	</div>
</section>

<section id="preferiti" class="header_default footer_default" data-title='Preferiti' data-role='page'>
<h1>Preferiti</h1>
<p>Qui andranno i contenuti</p>
</section>

<section id="newsletter" class="header_default footer_default" data-title='Newsletter' data-role='page'>
	
	<form action="registrazione.php"  method="post" >
		<fieldset>
		<div data-role="fieldcontain">

			<label>Nome</label>
			<input type="text" name="nome"  placeholder='inserisci il nome' />

		</div>
		<div data-role="fieldcontain">
			<label>Cognome</label>
			<input type="text" name="cognome" placeholder='inserisci il cognome' />
		</div>
		<div data-role="fieldcontain">
			<label>Mail</label>
			<input type="email" name="mail" placeholder='inserisci la tua mail' />
		</div>
		<div data-role="fieldcontain">
			<label>Provincia</label>
			<select name="provincia" >
				<option value="Bologna">Bologna</option>
				<option value="Modena">Modena</option>
				<option value="Ferrara">Ferrara</option>
			</select>
		</div>
		<div data-role="fieldcontain">
			<label>Citt&agrave;</label>
			<select name="citta" >
				<option value="Bologna">Bologna</option>
				<option value="Modena">Modena</option>
				<option value="Ferrara">Ferrara</option>
			</select>
		</div>
		<div class="ui-block-a">

			<input type="submit" name="submit" value='iscriviti' />
		</div>
		</fieldset>	
</form>

</section>





<script type='text/javascript' src='js/scripts.js'></script>





</body>
</html>
