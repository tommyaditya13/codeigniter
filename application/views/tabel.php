<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<?php echo "<h2>".$this->session->flashdata('pesan')."<h2/>" ?>
	<br />
	<h2 align="center">DATA MAHASISWA</h2>
	<br />
	<table border="1" style="border-collapse:collapse; width:50%;" align="center">
	<tr style="background:gray;">
		<th>No Induk</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Action</th>
	</tr>
	<?php foreach($data as $d){?>
	<tr>
		<td align="center"><?php echo $d['nim']; ?></td>
		<td align="center"><?php echo $d['nama']; ?></td>
		<td align="center"><?php echo $d['alamat']; ?></td>
		<td align="center">
		<a href="<?php echo base_url()."index.php/crud/add_data"; ?>">Tambah Data</a> ||
		<a href="<?php echo base_url()."index.php/crud/edit_data/".$d['nim']; ?>">Edit</a>  ||
		<a href="<?php echo base_url()."index.php/crud/do_delete/".$d['nim']; ?>">Hapus</a>
		</td>
	</tr>		
	<?php } ?>
	</table>
	
</body>
</html>
