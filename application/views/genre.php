<div>
	<table class="table table-bordered table-striped" id="genreTable">
	<thead>
	<tr>
		<th style="padding-left: 10px">ID</th>
		<th style="padding-left: 10px">Name</th>
	</tr>
	</thead>
	<tbody>
	<?php	foreach ($genre as $a) { ?>
			<tr>
				<td style="padding-left: 10px">
					<?php echo $a['genre_id'];?>
				</td>
				<td style="padding-left: 10px;padding-right: 10px;padding-bottom: 10px">
					<?php echo $a['genre_name'];?>
				</td>
			</tr>
		
	<?php }; ?>
	</tbody>
	</table>
</div>