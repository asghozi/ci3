
<html>
<head>
	<title>My Post List</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
   <nav class="navbar navbar-inverse">
      <div class="container-fluid">
	<div class="navbar-header">
		<a class="navbar-brand" href="">ASG</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="<?php echo base_url(); ?>">Home</a></li>
		<li><a href="<?php echo base_url('index.php\blog'); ?>">Blog</a></li> 
   </div>


</nav>
<p align="center">
<a href="<?php echo base_url('index.php\blog\create'); ?>" class="btn btn-success">Create Post</a>
<a href="<?php echo base_url('index.php\category'); ?>" class="btn btn-success">Category</a>
</p>
<div class="container">
	
		<?php if( !empty($postlist) ) : ?>
		<div class="album py-5 bg-light">
			<div class="container">
				<div class="row">

					<?php
						// Kita looping data dari controller
						foreach ($postlist as $key) :
					?>

					<div class="col-md-4">
						<!-- Kita format tampilan blog dalam bentuk card -->
						<!-- https://getbootstrap.com/docs/4.0/components/card/ -->
						<div class="card mb-4 box-shadow border-0">
														
							<div class="card-body">

								<!-- Batasi cuplikan konten dengan substr sederhana -->
								<h5><?php echo character_limiter($key->judul, 20) ?></h5>
								<small class="text-success text-uppercase"><?php echo $key->cat_name ?></small>
								<p class="card-text"><?php echo word_limiter($key->konten, 20) ?></p>
								
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<!-- Untuk link detail -->
										<a href="<?php echo base_url(). 'index.php/blog/read/' . $key->id_post ?>" class="btn btn-outline-secondary">Baca</a>
										<a href="<?php echo base_url(). 'index.php/blog/update/' . $key->id_post ?>" class="btn btn-outline-secondary">Edit</a>
									</div>

								</div>
							</div>
							
						</div>
					</div>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
		<?php else : ?>
		<p>Belum ada data bosque.</p>
		<?php endif; ?>

		<?php
		if (isset($links)) { ?>
			
			<p align="center"><?php echo $links; ?></p>
		

		<?php } 
		?>
</div>
</body>
</html>