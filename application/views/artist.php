<div>
<a href="<?php echo base_url()?>master/add_artist">
<button style="margin-bottom: 20px" class="btn btn-success">ADD NEW </button>
</a>
	<table class="table table-bordered table-striped" id="artistTable">
	<thead>
	<tr>
		<th style="padding-left: 10px">ID</th>
		<th style="padding-left: 10px">Name</th>
		<th style="padding-left: 10px">DoB</th>
		<th style="padding-left: 10px">Gender</th>
		<th style="padding-left: 10px">Picture</th>
		<th style="padding-left: 10px">ACTION</th>
	</tr>
	</thead>
	<tbody>
	<?php	foreach ($artist as $a) { ?>
			<tr id='<?php echo $a['artist_id'];?>'>
				<td style="padding-left: 10px">
					<?php echo $a['artist_id'];?>
				</td>
				<td style="padding-left: 10px" id="<?php echo $a['artist_id'].'name';?>">
					<?php echo $a['artist_name'];?>
				</td>
				<td style="padding-left: 10px" id="<?php echo $a['artist_id'].'dob';?>">
					<?php echo $a['dob'];?>
				</td>
				<td style="padding-left: 10px" id="<?php echo $a['artist_id'].'gender';?>">
					<?php echo $a['gender'];?>
				</td>
				<td style="padding-left: 10px;padding-right: 10px;padding-bottom: 10px">
					<img src="<?php echo $a['picture'];?>" style="width: 200px;object-fit: cover; height: 250px" id="<?php echo $a['artist_id'].'picture';?>">
				</td>
				<td>
					<button type="button" class="btn btn-info btn-lg updateA" data-toggle="modal" data-target="#update_artist" data-id='<?php echo $a['artist_id'];?>' data-name ='<?php echo $a['artist_name'];?>' data-dob='<?php echo date('m/d/Y',strtotime($a['dob']));?>' data-gender='<?php echo $a['gender'];?>' data-picture='<?php echo $a['picture']; ?>'>UPDATE</button>
				
					<button type="button" class="btn btn-danger btn-lg deleteA" data-id='<?php echo $a['artist_id'];?>' >DELETE</button>
				</td>
			</tr>
		
	<?php }; ?>
	</tbody>
	</table>
</div>

<div id="update_artist" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Artist</h4>
      </div>
      <div class="modal-body">
	        <form class="col-md-4" id="updateModal" method="POST" action="<?php echo base_url();?>master/update_artist">
	        	<input type="hidden" name="artist_id" id="artist_id">
				<div class="form-group">
				    <input type="text" id='name' class="form-control" name="artist_name" placeholder="NAME" required="">
			  	</div>
			  	<div class="form-group">
				    <input type="text" id='dob' class="form-control datepicker" name="dob"  placeholder="DoB">
			  	</div>
			  	<div class="form-group">
				    <input type="radio" name="gender" value="male" id="male">MALE
				     <input type="radio" name="gender" value="female" id="female">FEMALE
			  	</div>
			  	<div class="form-group">
				    <input type="text" id='picture' class="form-control" name="picture"  placeholder="PICTURE">
			  	</div>
			  	<div class="form-group">
				    <input type="submit" class="form-control btn btn-primary" name="submit"  placeholder="SUBMIT">
			  	</div>
			</form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>

  </div>
</div>