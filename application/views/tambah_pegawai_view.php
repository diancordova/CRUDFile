<?php include('header.php');
 ?>
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<?php echo form_open_multipart('pegawai/create'); ?>
					<legend>Tambah Data Pegawai</legend>
					<?php echo validation_errors(); ?>
					<div class="form-group">
						<label for="">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
						<label for="">Nip</label>
						<input type="text" class="form-control" id="nip" name="nip" placeholder="Nip">
						<label for="">Tanggal Lahir</label>
						<input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="Input field">
						<label for="">Alamat</label>
						<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
						<input type="hidden" class="form-control" id="id" name="id" placeholder="Alamat">

						<div class="form-group">
							<label for="">Foto</label>
							<input type="file" name="userfile" size="20">
						</div>
						<!--  -->
						
					</div>
				
					
				
					<button name="input" type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
		</div>
		</div>
	</div>
