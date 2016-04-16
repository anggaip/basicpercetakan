<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form action="<?php echo base_url().'distributor/proses_update' ?>" enctype="multipart/form-data" method="post" role="form">
			<legend>Edit Data Distributor</legend>
			<table class="table table-stripped table-putih">
				<tbody>
					<tr>
						<td class="col-lg-5">ID Distributor</td>
						<td><input type="text" name="a" class="form-control" required="required" value="<?php echo $id_dis; ?>" readonly></td>
					</tr>
					<tr>
						<td>Nama Distributor</td>
						<td><input type="text" name="b" class="form-control" required="required" value="<?php echo $nm_dis; ?>"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="c" class="form-control" required="required" value="<?php echo $alamat_dis; ?>"></td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td><input type="text" name="d" class="form-control" required="required" value="<?php echo $telp_dis; ?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="e" id="inputG" class="form-control" required="required" value="<?php echo $email_dis; ?>"></td>
					</tr>
					<tr>
						<td colspan="2"><button type="submit" class="btn btn-info">Simpan</button></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</div>