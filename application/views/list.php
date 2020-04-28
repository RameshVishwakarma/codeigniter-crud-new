<!DOCTYPE html>
<html>
<head>
	<title>Crud Applicaton - View User</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">	
	<style type="text/css">
		div#example_filter {
		    margin-left: 69% !important;
		}
		div#example_paginate {
			margin-left: 72% !important;
		}
	</style>
</head>
<body>
	<div class="navbar navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand">CRUD APPLICATION</a>
		</div>
	</div>
	<div class="container" style="padding-top: 10px;">	
		<div class="row">
			<div class="col-md-12">
				<?php
				$success =  $this->session->userdata('success');
				if($success != ""){
				?>
				<div class="alert alert-success"><?php echo $success;?></div>
				<?php	
				}
				?>
				<?php
				$failure =  $this->session->userdata('failure');
				if($failure != ""){
				?>
				<div class="alert alert-success"><?php echo $failure;?></div>
				<?php	
				}
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-6">
						<h3>View User</h3>
					</div>
					<div class="col-6 text-right">
						<a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">Create</a>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table id="example" class="table table-striped table-bordered" style="width:100%">
				    <thead>
				        <tr>
				            <th>Name</th>
				            <th>Email</th>
				            <th>Created date</th>
				            <th>Edit</th>
				            <th>Delete</th>				            
				        </tr>
				    </thead>
				    <tbody>
				    	<?php
	
				    	if(!empty($users))
				    	{
				    		foreach($users as $val)
				    		{	
				    	?>
				    		<tr>
					            <td><?php echo $val['name'];?></td>
					            <td><?php echo $val['email'];?></td>
					            <td><?php echo $val['created_at'];?></td>
					            <td>
					            	<a href="<?php echo base_url().'index.php/user/edit/'.$val['id'];?>" class="btn btn-primary">Edit</a>
					        	</td>
					            <td>
					            	<a href="<?php echo base_url().'index.php/user/delete/'.$val['id'];?>" class="btn btn-danger">Delete</a>
					            </td>
					        </tr>
				    	<?php	
				    		}
				    	}	
				    	else
				    	{
				    	?>
				    		<tr>
					            <td colspan="5">Records not found</td>
					        </tr>
				    	<?php	
				    	}
				    	?>				        
					</tbody>				        
				</table>
			</div>
		</div>	
	</div>

<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable();
	} );
</script>
</body>
</html>