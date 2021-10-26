<?php
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	$id = $_POST['id'];
	//echo $id ;
	$query = "select * from buy_table where id=$id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		$id = $res['id'];
		$status = $res['status'];
	}
?>

	<input type="text" id="t_id" hidden value="<?php echo $id;?>"/>
	<div class="row mb-3">
		<div class="col-sm-4">
			<input type="text" id="status" class="form-control" value="<?php echo $status;?>"/><br>
			<input class='btn btn-success' type="button" id="update" value="Update"/>
			<input class='btn btn-danger' type="button" onclick="$('#edit-form').slideUp();" name="cancel" value="Cancel"/>
		</div>
	</div>
	
	
	

<script type="text/javascript">
	$(document).ready(function(){
		
		$('#update').click(function(){
			var id = $('#t_id').val();
			var status = $('#status').val();
		
			$.ajax({
				url:"buyEditAction.php",
				type:"POST",
				data: {id:id,status:status},
				success: function(data){
					
					if(data==1){
						
					    $('#id').val('');
						$('#status').val('');
						$('#edit-form').slideUp();
						$.get('buyView.php',function(data){
						  $('#data-show').html(data);
						})
					}
					else{
					alert("Problem");					
					}
				}
			});
		});
		
	});
</script>