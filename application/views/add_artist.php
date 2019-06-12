<form class="col-md-4" method="POST" action="<?php echo base_url();?>master/save_artist">
	<div class="form-group">
	    <input type="text" class="form-control" name="artist_name" placeholder="NAME" required="">
  	</div>
  	<div class="form-group">
	    <input type="text" class="form-control datepicker" name="dob"  placeholder="DoB">
  	</div>
  	<div class="form-group">
	    <input type="radio" name="gender" value="male">MALE
	     <input type="radio" name="gender" value="female">FEMALE
  	</div>
  	<div class="form-group">
	    <input type="text" class="form-control" name="pic"  placeholder="PICTURE">
  	</div>
  	<div class="form-group">
	    <input type="submit" class="form-control btn btn-primary" name="submit"  placeholder="SUBMIT">
  	</div>
</form>