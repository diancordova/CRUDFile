<?php include('header.php'); ?>
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
		</div>
	</div>
