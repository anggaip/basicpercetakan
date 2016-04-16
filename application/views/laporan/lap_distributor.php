<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan Data Distributor</title>
	<link rel="stylesheet" href="">
</head>
<body onload='print()'>
	<center><h3>LAPORAN DATA DISTRIBUTOR</h3></center>
	<div class="table-responsive">
						<?php echo $this->session->flashdata('pesan'); ?>
						<table class="table table-hover table-putih" border="1" style="border-collapse: collapse" width="100%">
							<thead>
								<tr>
									<th>NO</th>
									<th>ID DISTRIBUTOR</th>
									<th>NAMA</th>
									<th>ALAMAT</th>
									<th>TELEPON</th>
									<th>EMAIL</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$no=1;
								foreach ($data as $d) { ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $d['id_dis'] ?></td>
									<td><?php echo $d['nm_dis'] ?></td>
									<td><?php echo $d['alamat_dis'] ?></td>
									<td><?php echo $d['telp_dis'] ?></td>
									<td><?php echo $d['email_dis'] ?></td>
								</tr>
								<?php
								$no++;
								 } ?>
							</tbody>
						</table>
					</div>
</body>
</html>