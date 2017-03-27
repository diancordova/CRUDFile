 <?php include('header.php'); 
?>
 <head>
<script language="javascript">
	$("document").ready(function(){
			alert("Tambah Data Sukses");
		});

</script>

 </head>
 <body>
    <div class="container-fluid">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href="<?php echo site_url('pegawai/create')?>" type="button" class="btn btn-primary">TAMBAHKAN DATA PEGAWAI LAGI</a>	
    	 		<a href="<?php echo site_url('pegawai/')?>" type="button" class="btn btn-success">KEMBALI KE DATA PEGAWAI</a>	
    	</div>
    </div>
 </body>