<!DOCTYPE html>
<html>
<head>
	<title>Crud Applicaton - Create User...</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<body>
	<div class="navbar navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand">CRUD APPLICATION</a>
		</div>
	</div>
	<div class="container" style="padding-top: 10px;">
		<h3>Create User</h3>
		<hr>
		<form name="createUser" method="post" action="<?php echo base_url().'index.php/user/create';?>">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Name</label>
						<input type="text" id="name" name="name" class="form-control" value="<?php echo set_value('name');?>">
						<?php echo form_error('name');?>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" id="email" name="email" class="form-control" value="<?php echo set_value('email');?>">
						<?php echo form_error('email');?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Create</button>
						<a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">Cancel</a>
					</div>
				</div>
			</div>	
		</form>	
	</div>
</body>
</html>