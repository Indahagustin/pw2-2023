<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Indah Agustin</td>
					<td>indahalausy77@gmail.com</td>
					<td>Sukabumi</td>
					<td>+6285798366825</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Ikhwan Faiz</td>
					<td>Ikhwanfaiz001@gmail.com</td>
					<td>Kuningan</td>
					<td>+628785497467</td>
				</tr>

				<?php
				  /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */

				  if (isset($_POST['submit'])) {
					// Variable
					$nama_siswa = $_POST['nama_lengkap'];
					$email = $_POST['email'];
					$alamat = $_POST['alamat'];
					$telepon = $_POST['telepon'];

				?>
				<!-- Menampilkan Data -->
				<tr>
					<td>3</td>
					<td><?= $nama_siswa ?></td>
					<td><?= $email ?></td>
					<td><?= $alamat ?></td>
					<td><?= $telepon ?></td>
				  </tr>
				  <?php } ?>

			</tbody>
		</table>
	</div>
</body>
</html>