<?php
	function findSteps($action = null){
		$files = scandir("./");
		foreach($files as $k => $v):
			if(preg_match("/.php/", $v) > 0):
				if ($v != "index.php") {
					echo('<li><a href="./?file='.$v.'">'.$v.'</a></li>');
				}
			endif;
		endforeach;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="style_crm.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="cargador/ezequiel.css">
</head>
<body>
	<nav>
		<ul>
			<?php findSteps(); ?>
		</ul>
	</nav>

	<div id="contenido">
		<?php require($_GET["file"]); ?>
	</div>
	
</body>
</html>