<?php include('header.php') ?>
					<div class="container-fluid">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Daftar Jabatan</h1>	
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Nama Pegawai</th>
										<th>Jabatan</th>
										<th>Tanggal Mulai</th>
										<th>Tanggal Selesai</th>
									</tr>
								</thead>
								<tbody>

								<?php foreach ($jabatan_list as $key) { ?>
									<tr>
										<td><?php echo $key->namaPegawai ?></td>
										<td><?php echo $key->namaJabatan ?></td>
										<td><?php echo $key->tanggalMulai ?></td>
										<td><?php echo $key->tanggalSelesai ?></td>
									</tr>

								<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<?php echo form_open_multipart('jabatan/create/'.$this->uri->segment(3)); ?>
									<legend>Tambah Daftar Jabatan</legend>
									<?php echo validation_errors(); ?>
									<div class="form-group">
										<label for="">Nama Jabatan</label>
										<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="" >
										<label for="">Tanggal Mulai</label>
										<input type="date" class="form-control" id="tanggalMulai" name="tanggalMulai" placeholder="Input Field" >
										<label for="">Tanggal Selesai</label>
										<input type="date" class="form-control" id="tanggalSelesai" name="tanggalSelesai" placeholder="Input Field">

									</div>
								
									<button type="submit" class="btn btn-primary">Submit</button>
						<?php echo form_close(); ?>
						</div>
					</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>