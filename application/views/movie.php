<div>
	<table class="table table-bordered table-striped" id="genreTable">
	<thead>
	<tr>
		<th style="padding-left: 10px">ID</th>
		<th style="padding-left: 10px;width: 90px">MOVIE TITLE</th>
		<th style="padding-left: 10px">DATE</th>
		<th style="padding-left: 10px">SINOPSYS</th>
		<th style="padding-left: 10px">DIRECTOR</th>
		<th style="padding-left: 10px">WRITTER</th>
		<th style="padding-left: 10px">ARTIST</th>
		<th style="padding-left: 10px">VIEW</th>
		<th style="padding-left: 10px">RATING</th>
		<th style="padding-left: 10px;width: 90px">RATING AVG</th>
		<th style="padding-left: 10px">COVER</th>
	</tr>
	</thead>
	<tbody>
	<?php	foreach ($movie as $a) { ?>
			<tr>
				<td style="padding-left: 10px">
					<?php echo $a['movie_id'];?>
				</td>
				<td style="padding-left: 10px">
					<?php echo $a['movie_title'];?>
				</td>
				<td style="padding-left: 10px">
					<?php echo $a['date'];?>
				</td>
				<td style="padding-left: 10px">
					<?php echo substr_replace($a['synopsis'], '...', 50);?>
				</td>
				<td style="padding-left: 10px">
					<?php 
						$c = 0;
						$d = count($a['director']);
						foreach ($a['director'] as $b) {
							echo  "<a href='".base_url()."Transaction/director/".$b['director_id']."'>".$b['director_name']."</a>";
							if ($c < $d-1) {
								echo ',';
							}
							$c++;
						}
					?> 
				</td>
				<td style="padding-left: 10px">
					<?php 
						$c = 0;
						$d = count($a['writter']);
						foreach ($a['writter'] as $b) {
							echo  "<a href='".base_url()."Transaction/writter/".$b['writter_id']."'>".$b['writter_name']."</a>";
							if ($c < $d-1) {
								echo ',';
							}
							$c++;
						}
					?> 
				</td>
				<td style="padding-left: 10px">
					<?php 
						$c = 0;
						$d = count($a['artist']);
						foreach ($a['artist'] as $b) {
							echo  "<a href='".base_url()."Transaction/artist/".$b['artist_id']."'>".$b['artist_name']."</a>";
							if ($c < $d-1) {
								echo ',';
							}
							$c++;
						}
					?> 
				</td>
				<td style="padding-left: 10px">
					<?php echo $a['view'];?>
				</td>
				<td style="padding-left: 10px">
					<?php echo $a['rating_movie'];?>
				</td>
				<td style="padding-left: 10px">
					<?php echo $a['rating_avg'];?>
				</td>
				<td style="padding-left: 10px;padding-right: 10px;padding-bottom: 10px">
					<img src="<?php echo $a['cover'];?>" style="width: 200px;object-fit: cover; height: 250px">
				</td>
				</td>
			</tr>
		
	<?php }; ?>
	</tbody>
	</table>
</div>