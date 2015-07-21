<section class="segmentacion">
	<section class="search-crm">
		<form action="" class="search-type-2">
			<div class="modal">
				<input type="text">
			</div>
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="220px" height="34.109px" viewBox="0 0 220 34.109" enable-background="new 0 0 220 34.109" xml:space="preserve">
			<polygon fill="none" stroke="#D3D3D3" stroke-miterlimit="10" points="0.689,1.089 204.136,1.089 218.778,17.388 205.011,33.089 
				0.943,33.089 14.778,17.089 "/>
			</svg>
		</form>
	</section>


	<section class="ctrl-seg">
		<div class="columns">
			<p class="area">Temas:</p>
			<ul class="column-list" id="accordion">
				<li class="list-level-1">
					<h3 class="icon-list-seg phone">item 1</h3>
					<div class="sub-list">
						<ul>
							<li>sub item 1</li>
							<li>sub item 2</li>
							<li>sub item 3</li>
							<li>sub item 4</li>
							<li>sub item 5</li>
						</ul>
					</div>
				</li>
				<li class="list-level-1">
					<h3 class="icon-list-seg receiver">item 2</h3>
					<div class="sub-list">
						<ul>
							<li>sub item 1</li>
							<li>sub item 2</li>
							<li>sub item 3</li>
							<li>sub item 4</li>
							<li>sub item 5</li>
						</ul>
					</div>
				</li>
				<li class="list-level-1">
					<h3 class="icon-list-seg folder">item 3</h3>
					<div class="sub-list">
						<ul>
							<li>sub item 1</li>
							<li>sub item 2</li>
							<li>sub item 3</li>
							<li>sub item 4</li>
							<li>sub item 5</li>
						</ul>
					</div>
				</li>
				<li class="list-level-1">
					<h3 class="icon-list-seg box">item 4</h3>
					<div class="sub-list">
						<ul>
							<li>sub item 1</li>
							<li>sub item 2</li>
							<li>sub item 3</li>
							<li>sub item 4</li>
							<li>sub item 5</li>
						</ul>
					</div>
				</li>
				
			</ul>
		</div>
		<div class="columns">
			<canvas id="graph" width="250" height="250"></canvas>
		</div>
	</section>

	
</section>

<script src="js/jquery-ui.min.js"></script>
<script src="js/Chart.js"></script>
<script>

	var items  = [
					{value:20,color:'#2B5844',highlight: '#9EB1A6', label: 'Item 1'},
					{value:40,color:'#2B5844',highlight: '#9EB1A6', label: 'Item 2'},
					{value:20,color:'#2B5844',highlight: '#9EB1A6', label: 'Item 3'},
					{value:10,color:'#2B5844',highlight: '#9EB1A6', label: 'Item 4'},
					{value:5,color:'#2B5844',highlight: '#9EB1A6', label: 'Item 5'},
					{value:5,color:'#2B5844',highlight: '#9EB1A6', label: 'Item 6'},
					];
	var Graph = new Grafico(items, "graph");

	Graph.getConf();
	Graph.fetch();
	

</script>
<script>
	jQuery(document).ready(function($) {
		$('#accordion').accordion({ active: 0});
	});

</script>