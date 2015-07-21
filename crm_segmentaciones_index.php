<section class="segmentacion">
	<section class="search-crm">
		<form action="#">
			<input type="text"> <input type="submit" value="Buscar">
		</form>
	</section>
	<section class="control-general">
		<div class="column first-col">
			<h4 class="column-title">Segmentacion</h4>
			<ul class="column-list">
				<li class="column-list-item"><span class="item-text folder">Lorem ipsum.</span></li>
				<li class="column-list-item"><span class="item-text folder">Lorem ipsum.</span></li>
				
			</ul>
			<div class="new-segment">
				<span class="icon-add">+</span>
				<span class="item-text">Nueva segmentación</span>
			</div>
		</div>
		<div class="column">
			<h4 class="column-title">1° subsegmentacion</h4>
			<ul class="column-list">
				<li class="column-list-item"><span class="item-text phone">Lorem ipsum.</span></li>
				<li class="column-list-item"><span class="item-text sat">Lorem ipsum.</span></li>
				<li class="column-list-item"><span class="item-text boxes">Lorem ipsum.</span></li>
			</ul>
		</div>
		<div class="column">
			<h4 class="column-title">2° subsegmentacion</h4>
			<ul class="column-list">
				
			</ul>
		</div>
	</section>

	
</section>



<script>
	$(function() {

		var newSegment = '<li class="column-list-item add-items">\
							<span class="item-text">Nueva segementación.</span>\
							<div class="subcontrols">\
								<span class="span-item-action window"></span>\
								<span class="span-item-action edit"></span>\
								<span class="span-item-action delete"></span>\
							</div>\
						</li>';


		$('.column .column-list .column-list-item').click(function(event) {
			event.preventDefault();
			$(this).parent().children('.column-list-item').removeClass('active-item');
			// $(this).parent().parent().children('.column-list-item').removeClass('active_item');
			$(this).addClass('active-item');
		});
		$('.column .column-list .column-list-item.add-items').unbind('click');
		$('#edit').click(function(event) {
			window.location.href = window.location.href + '&page=edit';
		});
		$('.new-segment').click(function(event) {
			if ($('.first-col ul li.add-items').length == 0) {
				if ($('.first-col ul li').length > 0) {
					$('.first-col ul li').first().before(newSegment)
				}else{
					$('.first-col ul').append(newSegment);
				}
			};
		});
	});
</script>