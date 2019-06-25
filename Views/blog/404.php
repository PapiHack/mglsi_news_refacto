<?php $title = 'Actualités MGLSI'; 

ob_start();

?>

<div id="contenu">
	<meta http-equiv="refresh" content="3; url=index.php">
	<p>Cet article n'existe pas !!!</p>
</div>
<?php $content = ob_get_clean(); 

require_once('../Views/layout.php');

?>
