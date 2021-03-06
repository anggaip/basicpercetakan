<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form action="<?php echo base_url().'barang/proses_update' ?>" enctype="multipart/form-data" method="post" role="form">
			<legend>Edit Data Barang</legend>
			<table class="table table-stripped table-putih">
				<tbody>
					<tr>
						<td class="col-lg-5">ID Barang</td>
						<td><input type="text" name="a" class="form-control" required="required" value="<?php echo $id_brg; ?>" readonly></td>
					</tr>
					<tr>
						<td>Nama Barang</td>
						<td><input type="text" name="b" class="form-control" required="required" value="<?php echo $nm_brg; ?>"></td>
					</tr>
					<tr>
						<td>Jenis Barang</td>
						<td><input type="text" name="c" class="form-control" required="required" value="<?php echo $jenis_brg ?>"></td>
					</tr>
					<tr>
						<td>Stock</td>
						<td><input type="text" name="d" class="form-control" required="required" value="<?php echo $stock_brg; ?>"></td>
					</tr>
					<tr>
						<td>Satuan</td>
						<td><input type="text" name="e" id="inputG" class="form-control" required="required" value="<?php echo $satuan_brg; ?>"></td>
					</tr>
					<tr>
						<td colspan="2"><button type="submit" class="btn btn-info">Simpan</button></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</div>