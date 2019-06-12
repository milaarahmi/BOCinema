<div>
	<table class="table table-bordered table-striped" id="writterTable">
	<thead>
	<tr>
		<th style="padding-left: 10px">ID</th>
		<th style="padding-left: 10px">Name</th>
		<th style="padding-left: 10px">Biodata</th>
		<th style="padding-left: 10px">Picture</th>
	</tr>
	</thead>
	<tbody>
	<?php	foreach ($writter as $w) { ?>
			<tr>
				<td style="padding-left: 10px">
					<?php echo $w['writter_id'];?>
				</td>
				<td style="padding-left: 10px">
					<?php echo $w['writter_name'];?>
				</td>
				<td style="padding-left: 10px">
					<?php echo $w['biodata'];?>
				</td>
				<td style="padding-left: 10px;padding-right: 10px;padding-bottom: 10px">
					<img src="<?php echo $w['pic'];?>" style="width: 200px;object-fit: cover; height: 250px">
				</td>
			</tr>
		
	<?php }; ?>
	</tbody>
	</table>
</div>