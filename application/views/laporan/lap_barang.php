<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan Data Barang</title>
	<link rel="stylesheet" href="">
</head>
<body onload='print()'>
	<center><h3>LAPORAN DATA BARANG</h3></center>
	<div class="table-responsive">
						<?php echo $this->session->flashdata('pesan'); ?>
						<table class="table table-hover table-putih" border="1" style="border-collapse: collapse" width="100%">
							<thead>
								<tr>
									<th>NO</th>
									<th>ID BARANG</th>
									<th>NAMA BARANG</th>
									<th>JENIS BARANG</th>
									<th>STOCK BARANG</th>
									<th>SATUAN</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$no=1;
								foreach ($data as $d) { ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $d['id_brg'] ?></td>
									<td><?php echo $d['nm_brg'] ?></td>
									<td><?php echo $d['jenis_brg'] ?></td>
									<td><?php echo $d['stock_brg'] ?></td>
									<td><?php echo $d['satuan_brg'] ?></td>
								</tr>
								<?php
								$no++;
								 } ?>
							</tbody>
						</table>
					</div>
</body>
</html>