<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Tugas Proweb Database Mahasiswa SI</h1>
	<table border="1">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Dosen Wali</th>
			<th>Jenis Kelamin</th>
		</tr>
		<?php foreach($identitas as $u){ ?>
		<tr>
			<td><?php echo $u->NIM ?></td>
			<td><?php echo $u->Nama ?></td>
			<td><?php echo $u->Doswal ?></td>
			<td><?php echo $u->Jenkel ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>