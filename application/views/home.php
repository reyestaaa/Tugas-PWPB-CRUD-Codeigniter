<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title>Halaman Home</title>
</head>
<body>
	<div class="container">
		<div class="p-3">

			<div class="text-atas d-flex justify-content-between mb-3">
				<h1>Data Mahasiswa</h1>
				<p class="fw-bold">MUHAMMAD ADRIAN REYESTA <br>
					XII-RPL2
				</p>
			</div>

			<a href="<?php echo base_url('/home/halaman_tambah') ?>" class="btn btn-primary fs-5 mb-5 fw-bold">Tambah data</a>

			<table class="table table-bordered border-dark table-striped">
					<tr style>
						<th>No</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Jurusan</th>
						<th>Aksi</th>
					</tr>

					<?php 
					$count = 0;
					foreach ($queryAllMhs as $row) {
						$count = $count + 1;
					?>

					<tr>
						<td><?php echo $count ?></td>
						<td><?php echo $row->nim ?></td>
						<td><?php echo $row->nama ?></td>
						<td><?php echo $row->jurusan?></td>
						<td>
							<a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->nim?>" class="btn fw-bold btn-warning">Edit</a> 
							<a href="<?php echo base_url('home/fungsiDelete')?>/<?php echo $row->nim?>" class="btn fw-bold btn-danger">Delete</a>
						</td>
					</tr>
					<?php } ?>
			</table>
			
		</div>
	</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html> 