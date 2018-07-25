<?php include 'inc/header.php'; ?>
<?php include 'User.php';
		$user = new User(); 

 ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>User List <span class="pull-right"><strong>Welcom!</strong>Delowar</span></h2>
			</div>    
			<div class="panel-body">
				<table class="table table-striped">
					<th width="20%">Serial</th>
					<th width="20%">Name</th>
					<th width="20%">Username</th>
					<th width="20%">Email Address</th>
					<th width="20%">Action</th>
					
					<tr>
						<td>01</td>
						<td>Delowar Jahan Imran</td>
						<td>imran</td>
						<td>inran@gmail.com</td>
						<td>
							<a class="btn btn-primary" href="profile.php?id=1">View</a>
						</td>
					</tr>
					
					<tr>
						<td>02</td>
						<td>Hasan Mahmud</td>
						<td>hasan</td>
						<td>hasan@gmail.com</td>
						<td>
							<a class="btn btn-primary" href="profile.php?id=1">View</a>
						</td>
					</tr>

					<tr>
						<td>03</td>
						<td>Mohammad Kawser</td>
						<td>kawser</td>
						<td>kawser@gmail.com</td>
						<td>
							<a class="btn btn-primary" href="profile.php?id=1">View</a>
						</td>
					</tr>

					<tr>
						<td>04</td>
						<td>Ariful Islam</td>
						<td>riful</td>
						<td>riful@gmail.com</td>
						<td>
							<a class="btn btn-primary" href="profile.php?id=1">View</a>
						</td>
					</tr>					
				</table>
			</div>
		</div>
<?php include 'inc/footer.php'; ?>

 























