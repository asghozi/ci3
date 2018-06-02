<?php  ?>

<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List Pegawai</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">List Pegawai</h1>
		<?php echo "<a href='".base_url('index.php/pegawai/create')."' class='btn btn-primary'>Tambah</a>"; ?>
		<?php echo "<a href='".base_url('index.php/pegawai')."' class='btn btn-success'>Tabel Normal</a>"; ?>
		
		<table class="table table-hover" id="datatable">
			<thead>
				<tr>
					<th>Nama Pegawai</th>
					<th>Alamat Pegawai</th>
					<th>Tanggal Lahir</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($data as $row) {
					echo "<tr><td>";
					echo $row['namaPegawai'];
					echo "</td><td>";
					echo $row['alamatPegawai'];
					echo "</td><td>";
					echo $row['tglLahir'];
					echo '</td><td>';
					echo "<a href='".base_url('index.php/pegawai/update/'.$row['idpegawai'])."' class='btn btn-warning'>Update</a>";
					echo " ";
					echo "<a href='".base_url('index.php/pegawai/delete/'.$row['idpegawai'])."' class='btn btn-danger'>Hapus</a>";
					echo "</td></tr>";
				}


				?>
			</tbody>
		</table>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>

		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
		<script>
			$(document).ready( function () {
				$('#datatable').DataTable();
			} );
		</script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="Hello World"></script>
	</body>
	</html>