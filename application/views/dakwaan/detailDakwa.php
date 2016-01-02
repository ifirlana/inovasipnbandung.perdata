<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">

    <title>Sisfo - Surat Pelimpahan Perkara</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://ironsummitmedia.github.io/startbootstrap-creative/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://ironsummitmedia.github.io/startbootstrap-creative/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/my.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="http://ironsummitmedia.github.io/startbootstrap-creative/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/creative-template");?>/creative.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("dist/css");?>/bootstrap.min.css" type="text/css">
	
	
	
	<!-- jQuery -->
    <script src="http://ironsummitmedia.github.io/startbootstrap-creative/js/jquery.js"></script>
    <script src="<?php echo base_url()?>dist/js/bootstrap.min.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="http://ironsummitmedia.github.io/startbootstrap-creative/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://ironsummitmedia.github.io/startbootstrap-creative/js/jquery.easing.min.js"></script>
    <script src="http://ironsummitmedia.github.io/startbootstrap-creative/js/jquery.fittext.js"></script>
    <script src="http://ironsummitmedia.github.io/startbootstrap-creative/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="http://ironsummitmedia.github.io/startbootstrap-creative/js/creative.js"></script>
	<style>
		.konten{ 
			-webkit-position:relative;
			-moz-position:relative;
			-webkit-margin-top:10%;
			-moz-margin-top:10%;
			padding-top:80px;
		}
	
	</style>
  </head>
  
  <body style="background-color:green;">
	<?php /*	<img src="<?php echo base_url()?>assets/img/LOGO_PN.jpg" style="position:fixed;z-index:-1;width:100%;" > */ ?>
		<form method="GET">	
			<div align="center" class="container konten">	
				<div class="panel panel-succes" >
					<div class="panel-body">
						<legend><h3><b>INFORMASI PERKARA</b></h3>
							Nomor : <?php echo isset($qry[0]->nomor_perkara)?$qry[0]->nomor_perkara:'' ?></legend>
							<?php 
							if (isset($qry)){
							foreach ($qry as $isi):
						?>
						<div class="row">
								<div align="left" class="col-lg-10">
										<div class="col-lg-3">
												Nama 
										</div>
										<div class="col-lg-6">		
												: <?php echo $isi->nama ?>
										</div>
								</div>
								<div align="left" class="col-lg-10">
										<div class="col-lg-3">
												Tempat Lahir 
										</div>
										<div class="col-lg-6">		
												: <?php echo $isi->tempat_lahir ?>
										</div>
								</div>
								<div align="left" class="col-lg-10">
										<div class="col-lg-3">
												Tanggal Lahir 
										</div>
										<div class="col-lg-6">		
												: <?php echo date("d-m-Y",strtotime($isi->tanggal_lahir)) ?>
										</div>
								</div>
								<div align="left" class="col-lg-10">
										<div class="col-lg-3">
												Jenis Kelamin 
										</div>
										<div class="col-lg-6">		
												: <?php echo $isi->jenis_kelamin ?>
										</div>
								</div>
								<div align="left" class="col-lg-10">
										<div class="col-lg-3">
												Kebangsaan 
										</div>
										<div class="col-lg-6">		
												: <?php echo $isi->kebangsaan ?>
										</div>
								</div>
								<div align="left" class="col-lg-10">
										<div class="col-lg-3">
												Tempat Tinggal 
										</div>
										<div class="col-lg-6">		
												: <?php echo $isi->tempat_tinggal ?>
										</div>
								</div>
								<div align="left" class="col-lg-10">
										<div class="col-lg-3">
												Agama 
										</div>
										<div class="col-lg-6">		
												: <?php echo $isi->agama ?>
										</div>
								</div>
								<div align="left" class="col-lg-10">
										<div class="col-lg-3">
												Pekerjaan 
										</div>
										<div class="col-lg-6">		
												: <?php echo $isi->pekerjaan ?>
										</div>
								</div>
							</div>
							<?php endforeach; }?>
						
						<legend>&nbsp;</legend>
						<?php 
								if(isset($qry1)){
									foreach ($qry1 as $isi):
						?>
						<div class="row">
							<div align="left" class="col-lg-10">
									<div class="col-lg-3">
											Dakwaan 
									</div>
									<!-- <div class="col-lg-6">		
											: <?php echo $isi->nomor_dakwaan ?>
									</div> -->
							</div><div align="left" class="col-lg-10">
									<div class="col-lg-3">
											Tunggal 
									</div>
									<div class="col-lg-6">		
											: <?php echo $isi->tunggal ?>
									</div>
							</div><div align="left" class="col-lg-10">
									<div class="col-lg-3">
											Alternatif 
									</div>
									<div class="col-lg-6">		
											: <?php echo $isi->alternatif ?>
									</div>
							</div>
							<div align="left" class="col-lg-10">
									<div class="col-lg-3">
											Kumulatif 
									</div>
									<div class="col-lg-6">		
											: <?php echo $isi->kumulatif ?>
									</div>
							</div>
							<div align="left" class="col-lg-10">
									<div class="col-lg-3">
											Tuntutan 
									</div>
									<div class="col-lg-6">		
											: <?php echo $isi->tuntutan ?>
									</div>
							</div>
							<div align="left" class="col-lg-10">
									<div class="col-lg-3">
											Putusan 
									</div>
									<div class="col-lg-6">		
											: <?php echo $isi->putusan ?>
									</div>
							</div>
							<div align="left" class="col-lg-10">
									<div class="col-lg-3">
											Banding 
									</div>
									<div class="col-lg-6">		
											: <?php echo $isi->banding ?>
									</div>
							</div>
							<div align="left" class="col-lg-10">
									<div class="col-lg-3">
											Kasasi 
									</div>
									<div class="col-lg-6">		
											: <?php echo $isi->kasasi ?>
									</div>
							</div>
							
						</div>
								<?php endforeach;}?>
						<legend>&nbsp;</legend>
						
						<?php 
								if(isset($qry2)){
									foreach ($qry2 as $isi):
						?>
						<div class="row">
							<div align="left" class="col-lg-10">
									<div class="col-lg-3">
											Nomor Perkara 
									</div>
									<div class="col-lg-6">		
											: <?php echo $isi->nomor_perkara ?>
									</div>
							</div>
							<div align="left" class="col-lg-10">
									<div class="col-lg-3">
											Hakim Ketua
									</div>
									<div class="col-lg-6">		
											: <?php echo $isi->hakim_ketua ?>
									</div>
							</div>
							<div align="left" class="col-lg-10">
									<div class="col-lg-3">
											Hakim Anggota 1
									</div>
									<div class="col-lg-6">		
											: <?php echo $isi->hakim_anggota ?>
									</div>
							</div>
							<div align="left" class="col-lg-10">
									<div class="col-lg-3">
											Hakim Anggota 2
									</div>
									<div class="col-lg-6">		
											: <?php echo $isi->hakim_anggota_2 ?>
									</div>
							</div>
							<div align="left" class="col-lg-10">
									<div class="col-lg-3">
											Jaksa
									</div>
									<div class="col-lg-6">		
											: <?php echo $isi->jaksa ?>
									</div>
							</div>
							<div align="left" class="col-lg-10">
									<div class="col-lg-3">
											Panitera Pengganti
									</div>
									<div class="col-lg-6">		
											: <?php echo $isi->panitera_pengganti ?>
									</div>
							</div>
						</div>
						<?php endforeach;} ?>
					</div>
				</div>
					
			</div>
		</form>
		
  
   <!-- jQuery -->
    <script src="http://ironsummitmedia.github.io/startbootstrap-creative/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://ironsummitmedia.github.io/startbootstrap-creative/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://ironsummitmedia.github.io/startbootstrap-creative/js/jquery.easing.min.js"></script>
    <script src="http://ironsummitmedia.github.io/startbootstrap-creative/js/jquery.fittext.js"></script>
    <script src="http://ironsummitmedia.github.io/startbootstrap-creative/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="http://ironsummitmedia.github.io/startbootstrap-creative/js/creative.js"></script>
  
  
  </body>
  
  
  
  </html>