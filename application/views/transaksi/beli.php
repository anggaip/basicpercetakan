<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<form action="<?php echo base_url().'pembelian/proses_beli' ?>" enctype="multipart/form-data" method="post" role="form">
			<legend>Transaksi Pembelian</legend>
			<?php echo $this->session->flashdata('pesan'); ?>
			<table class="table table-stripped table-putih">
				<tbody>
					<tr>
						<td class="col-lg-5">Tanggal</td>
						<td><?php echo date('d M Y'); ?></td>
					</tr>
					<tr>
						<td class="col-lg-5">ID Barang</td>
						<td><input type="text" name="a" class="form-control" required="required"></td>
					</tr>
					<tr>
						<td>Jumlah</td>
						<td><input type="text" name="b" class="form-control" required="required"></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><button type="submit" class="btn btn-info">Simpan</button></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</div>