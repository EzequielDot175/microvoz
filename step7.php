<link rel="stylesheet" href="cargador/ezequiel.css">

<!-- script grafico -->
<script language="javascript" type="text/javascript" src="js/Chart.min.js"></script>
<script>
	var pieData = [
			{
				value: 201000 ,
				color:"#9DC969",
				highlight: "#AACE76",
				label: "Tickets cargados"
			},
			{
				value: 2000,
				color: "#DB6767",
				highlight: "#E07979",
				label: "Error"
			},
			{
				value: 4000 ,
				color: "#FDB45C",
				highlight: "#FFC870",
				label: "Repetidos en archivo"
			},
			{
				value: 25000 ,
				color: "#AEAEAE",
				highlight: "#BCBBBB",
				label: "Ya tenían tickets"
			}

		];

		window.onload = function(){
			var ctx = document.getElementById("chart-area").getContext("2d");
			window.myPie = new Chart(ctx).Pie(pieData);
		};
</script>
<!-- script grafico -->

<div class="crm_contenedorA">

	<div class="form-grafico">

		<div class="">

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
	</div>

	<div class="grafico">

		<div class="titulo">
			<h3>Datos de la carga de tickets</h3>
		</div>

		<div class="grafico-torta gris-background">
			
			<div class="info">
				<h3>Total de contactos: 229.000</h3>
				<div class="item">
					<span></span><p>201.000 Tickets Cargados</p>
				</div>

				<div class="item">
					<span></span><p>25.000 Ya tenian tickets</p>
				</div>

				<div class="item">
					<span></span><p>4.000 Repetidos en archivo</p>
				</div>
				
				<div class="item">
					<span></span><p>2.000 Error</p>
				</div>
				
			</div>

			<div id="canvas-holder">
				<canvas id="chart-area" width="300" height="300"/>
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

<button class="boton">Aceptar</button><button class="boton">Cancelar</button>

</div>

