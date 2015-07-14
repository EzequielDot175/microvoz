<?php 
	function findSteps($action = null){
		$files = scandir("./");
		foreach($files as $k => $v):
			if(preg_match("/step.*[0-9].php/", $v) > 0):
				echo('<li><a href="./?file='.$v.'">'.$v.'</a></li>');
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