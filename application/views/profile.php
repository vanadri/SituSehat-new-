<!DOCTYPE html>
<html>
    <head>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css'); ?>"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Profile</title>
	</head>

	<body>
		<main>
			<div class="profile-info">
				<h3 style="color: black">Hello, admin <?php echo $_SESSION['username']; ?></h3>
				<br>
				<h4><a href="http://localhost/SituSehat/Home" style="color: black">Home</a></h4>
				<h4><a href="<?= site_url('profile/logout') ?>" style="color: black">Logout</a></h4>
			</div>
		</main>
	</body>
</html>