<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
	$(function (){
		$('#artistTable').DataTable();
	})
</script>

<script type="text/javascript">
	$('.updateA').on('click',function(){
		var id =$(this).attr('data-id');
		$('#artist_id').val(id);
		var name =$(this).attr('data-name');
		$('#name').val(name);
		var dob =$(this).attr('data-dob');
		$('#dob').val(dob);
		var gender =$(this).attr('data-gender');
		if(gender=='male'){
			$('#male').attr('checked',true);
		}
		if(gender=='female'){
			$('#female').attr('checked',true);
		}
		var picture =$(this).attr('data-picture');
		$('#picture').val(picture);
	})
</script>

<script type="text/javascript">
	$('#updateModal').submit(function(e){
		e.preventDefault();
		var url2 = $(this).attr('action');
		var id = $('#artist_id').val();
		var name = $('input[name = "artist_name"]').val();
		var dob = $('input[name = "dob"]').val();
		var gender = $('input[name = "gender"]:checked').val();
		var picture = $('input[name = "picture"]').val();

		$.ajax({
				url: url2,
				type: 'POST',
				data: $(this).serialize(),
				success: function(data){
					if(data=='1'){
						swal("Success!","Artist data has been updated","success");
						$('#update_artist').modal('hide');
						updateData(id,name,dob,gender,picture);
					}else{
						swal("Failed!","Artist data not updated","error");
						$('#update_artist').modal('hide');
					}
				}
		})
	});                                                                                                                 

	function updateData(id,name,dob,gender,picture){
		$('#'+id+'name').html(name);
		$('#'+id+'dob').html(dob);
		$('#'+id+'gender').html(gender);
		$('#'+id+'picture').attr('src',picture);
	}
</script>

<script type="text/javascript">
	$('.deleteA').on('click',function(){
		swal({
			title : "Are You Sure?",
			text : "Once deleted, you will not be able to recover this file!",
			icon : "warning",
			button : true,
			dangerMode : true,
		})
		.then((willDelete)=>{
			if(willDelete){
				var artist_id = $(this).attr('data-id');
				$.ajax({
					url : '<?php echo base_url(); ?>Master/delete_artist/'+artist_id,
					success: function(data){
						if (data=='1'){
							swal("Success!","Artist data has been deleted","success");
							deleteData(artist_id);
						}else{
							swal("Failed!","Artist data not deleted","error");
						}
					}
				})
			}
		});
	});

	function deleteData(id){
		$('#'+id).remove();
	}

</script>