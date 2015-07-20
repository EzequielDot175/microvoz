<link rel="stylesheet" href="cargador/ezequiel.css">

<!-- script grafico -->
<script language="javascript" type="text/javascript" src="js/Chart.min.js"></script>


<script>
	//colores
	color1 = "#9DC969";
	hcolor1 = "#AACE76"; //hover
	color2 = "#E07979";
	hcolor2 = "#9DC969";//hover
	color3 = "#FDB45C";
	hcolor3 = "#FFC870";//hover
	color4 = "#AEAEAE";
	hcolor4 = "#BCBBBB";//hover

	//grafico
	var pieData = [
			{
				value: 201000 ,
				color: color1,
				highlight: hcolor1,
				label: "Tickets cargados"
			},
			{
				value: 2000,
				color: color2,
				highlight: hcolor2,
				label: "Error"
			},
			{
				value: 4000 ,
				color: color3,
				highlight: color3,
				label: "Repetidos en archivo"
			},
			{
				value: 25000 ,
				color: color4,
				highlight: hcolor4,
				label: "Ya tenían tickets"
			}

		];

		window.onload = function(){
			var ctx = document.getElementById("chart-area").getContext("2d");
			window.myPie = new Chart(ctx).Pie(pieData);
			//agrega COLOR a items fuera del gráfico
			document.getElementById("color1").style.background = color1;
			document.getElementById("color2").style.background = color2;
			document.getElementById("color3").style.background = color3;
			document.getElementById("color4").style.background = color4;
		};
</script>
<!-- script grafico -->

<div class="crm_contenedorA contenedor-grafico">

	<div class="form-grafico">

		<div class="form">
			<form action="">
				<label class="simple">Nombre</label>
				<input type="text" name="" value="">
				<label class="simple ">Módulo</label>

				<input class="gris-background" type="text" name="" value="">
				<label class="simple">Entidad</label>

				<input class="gris-background" type="text" name="" value="">
				<label class="simple">Campaña</label>

				<input class="gris-background" type="text" name="" value="">
				<label class="simple">Estado</label>

				<select class="gris-background" name="">
					<option value="" disabled selected>domicilio</option>
					<option value="">Opciones</option>
					<option value="">Opciones</option>
					<option value="">Opciones</option>
				</select>

				<label >Fecha de vencimiento</label>
				<input type="text" name="" value="">

				<div class="separador"></div>

				<label>Tickets Total</label>
				<input class="gris-background" type="text" name="" value="">

				<label >Tickets Abiertos</label>
				<input class="gris-background" type="text" name="" value="">

				<label >Tickets Cerrados</label>
				<input class="gris-background" type="text" name="" value="">
			</form>
		</div>

	</div>

	<div class="grafico">

		<div class="titulo">
			<h3>Datos de la carga de tickets</h3>
		</div>

		<div class="grafico-torta gris-background">
			
			<div class="info">
				<h3>Total de contactos: 229.000</h3>
				<div class="item">
					<span id="color1"></span><p>201.000 Tickets Cargados</p>
				</div>

				<div class="item">
					<span id="color2"></span><p>25.000 Ya tenian tickets</p>
				</div>

				<div class="item">
					<span id="color3"></span><p>4.000 Repetidos en archivo</p>
				</div>
				
				<div class="item">
					<span id="color4"></span><p>2.000 Error</p>
				</div>
				
			</div>

			<div id="canvas-holder">
				<canvas id="chart-area" width="200" height="200"/>
			</div>
			
		</div>

		<div class="descripcion gris-background">
			<p><span>Tipo de ticket:</span> Garbarino Mora temprana</p>
			<p><span>Campaña:</span> Garbarino Mora temprana</p>
			<p><span>Campo clave:</span> DNI</p>
			<p><span>Lote:</span> 197</p>
			<p><span>Nombre de archivo:</span> asig2015.xls</p>
		</div>

	</div>

	<div class="botones-centrados">
		<button class="boton">Guardar</button>
		<button class="boton">Cancelar</button>
	</div>



</div>

