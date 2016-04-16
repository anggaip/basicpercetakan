					<nav class="navbar navbar-default" role="navigation">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand">Master Data Barang</a>
						</div>
					
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo base_url().'barang/input' ?>"><span class="glyphicon glyphicon-plus"></span> Tambahkan Data Barang</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
							<form class="navbar-form navbar-left" method="post" action="<?php echo base_url().'barang/cari' ?>" role="search">
								<div class="form-group">
									<input type="text" name="cari" class="form-control" placeholder="Masukkan ID Barang" required="required">
								</div>
								<button type="submit" class="btn btn-info">Cari</button>
							</form>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>

					<div class="table-responsive">
						<?php echo $this->session->flashdata('pesan'); ?>
						<table class="table table-hover table-putih">
							<thead>
								<tr>
									<th>NO</th>
									<th>ID BARANG</th>
									<th>NAMA BARANG</th>
									<th>JENIS BARANG</th>
									<th>STOCK BARANG</th>
									<th>SATUAN</th>
									<th colspan="2">AKSI</th>
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
									<td><a href="<?php echo base_url().'barang/update/'.$d['id_brg']; ?>" title="edit"><span class="glyphicon glyphicon-edit"></span></a></td>
									<td><a href="<?php echo base_url().'barang/delete/'.$d['id_brg']; ?>" title="hapus"><span class="glyphicon glyphicon-trash"></span></a></td>
								</tr>
								<?php
								$no++;
								 } ?>
							</tbody>
						</table>
					</div>



