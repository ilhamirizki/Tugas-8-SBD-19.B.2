<html>
<head>
	<title> Menampilkan data table MySQL </title>
	<style>
		body {font-family: tahoma, arial}
		table {border-collapse: collapse;}
		th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color:#303030}
		th {background : #cccccc; font-size: 12px; border-color: #B0B0B0}
	</style>
</head>
<body>
	<center><h1>KONTRAKAN PUTRA KEMBAR</h1></center>
	<h3>Tabel kamar</h3>
	<table>
		<thead>
			<tr>
				<th>nomor_kamar</th>
				<th>tipe_kamar</th>
				<th>keterangan</th>
				<th>harga</th>
			</tr>
		</thead>
		<?php
		include 'koneksi.php';
		$sql = 'SELECT * FROM kamar';
		$query = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><?php echo $row['nomor_kamar'] ?></td>
					<td><?php echo $row['tipe_kamar'] ?></td>
					<td><?php echo $row['keterangan'] ?></td>
					<td><?php echo $row['harga'] ?></td>
				</tr>
			</tbody>
			<?php
		}
		?>
	</table>
	<h3>Tabel kamar2</h3>
	<table>
		<thead>
			<tr>
				<th>nomor_kamar</th>
				<th>tipe_kamar</th>
				<th>keterangan</th>
				<th>harga</th>
			</tr>
		</thead>
		<?php
		include 'koneksi.php';
		$sql = 'SELECT * FROM kamar2';
		$query = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><?php echo $row['nomor_kamar'] ?></td>
					<td><?php echo $row['tipe_kamar'] ?></td>
					<td><?php echo $row['keterangan'] ?></td>
					<td><?php echo $row['harga'] ?></td>
				</tr>
			</tbody>
			<?php
		}
		?>
	</table>
	<h3>Tabel kamar3</h3>
	<table>
		<thead>
			<tr>
				<th>nomor_kamar</th>
				<th>tipe_kamar</th>
				<th>keterangan</th>
				<th>harga</th>
			</tr>
		</thead>
		<?php
		include 'koneksi.php';
		$sql = 'SELECT * FROM kamar3';
		$query = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><?php echo $row['nomor_kamar'] ?></td>
					<td><?php echo $row['tipe_kamar'] ?></td>
					<td><?php echo $row['keterangan'] ?></td>
					<td><?php echo $row['harga'] ?></td>
				</tr>
			</tbody>
			<?php
		}
		?>
	</table>
	<h3>Tabel data_sewa</h3>
	<table>
		<thead>
			<tr>
				<th>id_sewa</th>
				<th>id_penyewa</th>
				<th>tanggal_sewa</th>
				<th>tipe_kamar</th>
				<th>pembayaran</th>
			</tr>
		</thead>
		<?php
		include 'koneksi.php';
		$sql = 'SELECT * FROM data_sewa';
		$query = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><?php echo $row['id_sewa'] ?></td>
					<td><?php echo $row['id_penyewa'] ?></td>
					<td><?php echo $row['tanggal_sewa'] ?></td>
					<td><?php echo $row['tipe_kamar'] ?></td>
					<td><?php echo $row['pembayaran'] ?></td>
				</tr>
			</tbody>
			<?php
		}
		?>
	</table>
	<h3>Tabel data_penyewa</h3>
	<table>
		<thead>
			<tr>
				<th>id_penyewa</th>
				<th>nama</th>
				<th>nomor_telepon</th>
			</tr>
		</thead>
		<?php
		include 'koneksi.php';
		$sql = 'SELECT * FROM data_penyewa';
		$query = mysqli_query($koneksi, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			?>
			<tbody>
				<tr>
					<td><?php echo $row['id_penyewa'] ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['nomor_telepon'] ?></td>					
				</tr>
			</tbody>
			<?php
		}
		?>
	</table>
	<br>
	<br>
	<footer>
		<p>&copy; 2021-Universitas Pelita Bangsa </p>
	</footer>
</body>
</html>
