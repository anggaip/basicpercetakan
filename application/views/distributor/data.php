					<nav class="navbar navbar-default bg-none" role="navigation">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand">Master Data Distributor</a>
						</div>
					
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo base_url().'distributor/input' ?>"><span class="glyphicon glyphicon-plus"></span> Tambahkan distributor</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
							<form class="navbar-form navbar-left" action="<?php echo base_url().'distributor/cari' ?>" method="post" role="search">
								<div class="form-group">
									<input type="text" name="cari" class="form-control" placeholder="Masukkan ID Distributor" required="required">
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
									<th>ID DISTRIBUTOR</th>
									<th>NAMA</th>
									<th>ALAMAT</th>
									<th>TELEPON</th>
									<th>EMAIL</th>
									<th colspan="2">AKSI</th>
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
									<td><a href="<?php echo base_url().'distributor/update/'.$d['id_dis']; ?>" title="edit"><span class="glyphicon glyphicon-edit"></span></a></td>
									<td><a href="<?php echo base_url().'distributor/proses_delete/'.$d['id_dis'] ?>" title="hapus"><span class="glyphicon glyphicon-trash"></span></a></td>
								</tr>
								<?php
								$no++;
								 } ?>
							</tbody>
						</table>
					</div>



