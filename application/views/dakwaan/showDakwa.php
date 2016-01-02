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
	
	<script type="text/javascript">
		$(document).ready(function(){
		//alert();
			 window.base_url = "<?php echo base_url();?>";
			
			/* $("#nomerPelimpahan").on('keypress',function(e){
			 var key = e.which;
					if ( key == 13 ) {
						submitCari();
					
			 }); */
			
			$("#cariSubmit").on('click',function(e){
				e.preventDefault();
				submitCari();
				//alert();
			});
			function submitCari(){
				//alert("jalan");
						 var cariKata = $('#nomerPelimpahan').val();
						if (cariKata == ''){
								alert("masukan kata kunci yang anda cari!");
								$('#nomerPelimpahan').focus();
								exit();
					}
				$.ajax({
					url:window.base_url+"Dakwaan/showdata",
					type:"POST",
					dataType:"JSON",
					data:{
							kataKunci:cariKata,
					},
					beforeSend: function(){
						 $('#isiData').html("Loading ...");
					},
					success: function(data){
						//console.log("cilukba"+data);
						
						$('#isiData').empty();
						if(data.message == null){
							alert("data tidak ditemukan!");
						}
					
						$.each(data.message, function(){
							$('#isiData').append("<tr>" +
							"<td>"+this.no+"</td>"+
							"<td>"+this.tanggal_masuk+"</td>"+
							"<td>"+this.nama+"</td>"+
							"<td> <a href='"+window.base_url +"dakwaan/halamanData/?no="+this.no+"' class='btn btn-primary'> view detail</a></td>"+
							"</tr>" );
							/* "<td>"+this.tanggal_lahir+"</td>"+
							"<td>"+this.tempat_lahir+"</td>"+
							"<td>"+this.jenis_kelamin+"</td>"+
							"<td>"+this.kebangsaan+"</td>"+
							"<td>"+this.tempat_tinggal+"</td>"+
							"<td>"+this.agama+"</td>"+
							"<td>"+this.pekerjaan+"</td>"+*/
							
						});
						
					},
					
				}); 
			}
			
		
		});
  </script>
  </head>
  
  <body style="background-color:green;">
	<div class="row">
		<div class="col-xs-12">
		<img class="img" src="<?php echo base_url()?>assets/img/header-2.jpg" width="100%"/>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12" style="margin-top:20px;">
		<form method="POST">	
			<div align="center" class="container">	
					<div class="jumbotron" align="center">
						<legend><h3><b> PENCARIAN DATA</b></h3></legend>
							<div>	
								<label>Cari No Perkara atau Nama Terdakwa :</label>
								<label><input type="text" class="itext" id="nomerPelimpahan"name="nomerPelimpahan"></label>
							</div>
							<div>	
								<p>
								<button class="btn btn-lg btn-primary" id="cariSubmit" name="cariSubmit" type="submit" style="width:30%; height:5%;">Cari</button></p>
							</div>
					</div>
			</div>
		</form>
		</div>
	</div>
	
		
		
		
		<div class="container" align="center">
				<div class="thumbnail" align="center">
					<table class="table table-striped">
						<tr>
								<td>Nomer Pelimpahan</td>
								<td>Tanggal Masuk</td>
								<td>Nama Terdakwa</td>
								<td>&nbsp;</td>
						</tr>
						<!--Isi Tabel-->
						<tr>
							<tbody id="isiData">
							</tbody>
						</tr>
						
					</table>
				</div>
		</div>
  
  <div class="row">
		<div class="col-xs-12">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-body">
					<div>
						<marquee>Data ini sekedar informasi sedangkan data yang valid ada di kantor Pengadilan Negeri Kls IA Khusus Bandung</marquee>
					</div><hr>
					<div  class="panel panel-success">
						<div class="panel-heading">
							<center>
								<p style="margin-left:-12px;">Sistem Informasi Tilang &copy;2014 Susilo NB.</p>
								<p>Developed By: <a href="#" title="crazysolution"><b>crazysolution</b></a></p>
							</center>
							<div class="row">
								<div class="col-xs-12 col-sm-12 text-center"><p><a href="http://www.freecounterstat.com" title="website hit counters"><img src="http://counter8.freecounterstat.ovh/private/freecounterstat.php?c=d4c1af7d2911dd998650b869cd20cc15" border="0" title="website hit counters" alt="website hit counters"></a></p>
				                </div>
				            </div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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