<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
header 
	{
    width: 100%;
    height: 400px;
    color: green;
	background-color:#2989d8;
}

</style>

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
		$('.carousel').carousel();
        window.base_url = "<?php echo base_url();?>";
        $("#caridong").click(function(){
            caridong();
            $("#over").fadeIn(1000);
        });
        $(".exit").click(function(){
            $("#over").fadeOut(1000);
        });
        function caridong(){
            var tgl = $('#piltgl').val();
            var jsidang = $('#jnsidang').val();
            var jinstansi = $('#jninstansi').val();
            var notil = $('#notil').val();
            if(notil == ''){
                alert("Tolong Input No. Tilang anda");
                exit();
            }
            $.ajax({
                    url: window.base_url+"login/tglView",
                            dataType: 'json',
                            type: 'POST',
                            data:
                            {
                                tglpil: tgl,
                                jnsidang: jsidang,
                                jninstansi: jinstansi,
                                jnotil:notil,
                            },
                            beforeSend: function(){
                                $('#isiExsekusi').html("Loading ...");
                            } ,
                            success:
                                function(data){
                                    $('#isiExsekusi').empty();
                                    var i=1;
                                      var tglpts ='';
                                      
                                     
                                    $.each(data.message, function(){
                                    if(this.tgl_putusan === undefined){
                                            /* tglpts=''; */
                                            tglpts= this.tgl_sidang;
                                        }else{
                                            tglpts=this.tgl_putusan;
                                        }
                                        $('#isiExsekusi').append("<tr>"+
                                            "<td>"+this.no_tilang+"</td>"+
                                            "<td>"+this.nama_pelanggar+"</td>"+
                                            "<td>"+this.alamat_pelanggar+"</td>"+
                                            "<td>"+this.pasal+"</td>"+
                                            "<td>"+this.barang_bukti+"</td>"+
                                            //"<td>"+tglpts+"</td>"+
                                            "<td>"+this.tgl_sidang+"</td>"+
                                            "<td class='text-center is_hidde'>ADA</td>"+ // @see hidden fahmi 20150311
                                            // "<td class='text-center is_hidde'>Rp. "+numeral(this.biaya_denda)+"</td>"+ // @see hidden fahmi 20150311
                                            "<td class='is_hidde'></td>"+
                                            "<td class='text-center is_hidde'>ADA</td>"+
                                            "<td>SUDAH</td>"+
                                            "<td class='is_hidde'>SUDAH SETOR</td>"+
                                            "<td>"+this.nama_putusan+"</td>"+                                           
                                        "</tr>");
                                        i++;
                                    });
                                    $("#totjum").html(i-1);
                                    /* add 11032015 fahmi */
                                     if($('#jnsidang').val() == 1){
                                        // $('.is_hidde').show();
                                        console.log('aasuuss');
                                      }else{
                                        //$('.is_hidde').hide();x
                                        console.log('bbassd ');
                                      }
                            },
                });
        }
    });
</script>
<style>
    .wallpaper
    {
        background-image:url("<?php echo base_url('assets/img/img.jpg');?>");
		z-index:-1;
    }
</style>
</head>

<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Inovasi Pengadilan Negeri Bandung</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li>
						<a class="page-scroll" href="http://inovasipnbandung.id/">Home</a>
					</li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cari Cepat <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
						<li><a href="http://inovasipnbandung.id/dakwaan/">Pelimpahan Perkara</a></li>
						<li><a href="http://tilang.inovasipnbandung.id/">Tilang</a></li>
                    </ul>
                </li>
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pelimpahan Online <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
						<li><a href="http://inovasipnbandung.id/home">Perkara Pidana</a></li>
						<li><a href="http://tilang.inovasipnbandung.id/home">Perkara Tilang</a></li>
                    </ul>
                </li>
                    <!-- <li>
                        <a class="page-scroll" href="#services-pidum">Pidana Umum</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header style=" background-image: url(<?php echo base_url("assets/img/header-2.jpg");?>);background-size:100%;background-repeat: no-repeat;margin-top:55px;">
        <div class="header-content">
            <div class="header-content-inner">
                <h2 style="text-shadow: 0 0 8px white;color:green;">Inovasi <br />Pengadilan Negeri Bandung</h2>
                <hr>
                <p style="text-shadow: 0 0 8px black;">Dibangun untuk memberikan pelayanan ke masyarakat lebih baik</p>
                <a href="#about" class="btn btn-info btn-xl page-scroll">Mengetahui Lebih Jauh</a>
            </div>
        </div>
    </header>
	

	<section class="bg-primary" id="about">
        <div class="container" id="about">
            <div class="row">
                <legend><h2 class="section-heading" align="center">Tentang Kita</h2></legend>
                        
            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8655904633524!2d107.62194240000001!3d-6.906671599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7b551383c93%3A0xfff07d3c5c30f15d!2sPengadilan+Negeri+Bandung!5e0!3m2!1sid!2sid!4v1441700417932" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>     
            </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                    <div class="col-md-6"> 
                            <div class="embed-responsive embed-responsive-16by9 col-xs-12">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/c-pMP-PTh1E"></iframe>
                            </div>
                            <p class="text-faded col-xs-12">Video dokumenter pengadilan bandung</p>
                            <p class="text-faded col-xs-12">Dibangun untuk memberikan pelayanan ke masyarakkat lebih baik</p>
                        </div>
                    <div class="col-md-6 text-center"> 
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3"></li>
							<li data-target="#carousel-example-generic" data-slide-to="4"></li>
							<li data-target="#carousel-example-generic" data-slide-to="5"></li>
							<li data-target="#carousel-example-generic" data-slide-to="6"></li>
							<li data-target="#carousel-example-generic" data-slide-to="7"></li>
							<li data-target="#carousel-example-generic" data-slide-to="8"></li>
							<li data-target="#carousel-example-generic" data-slide-to="9"></li>
							<li data-target="#carousel-example-generic" data-slide-to="10"></li>
							<li data-target="#carousel-example-generic" data-slide-to="11"></li>
							<li data-target="#carousel-example-generic" data-slide-to="12"></li>
							<li data-target="#carousel-example-generic" data-slide-to="13"></li>
							<li data-target="#carousel-example-generic" data-slide-to="14"></li>
							<li data-target="#carousel-example-generic" data-slide-to="15"></li>
							<li data-target="#carousel-example-generic" data-slide-to="16"></li>
							<li data-target="#carousel-example-generic" data-slide-to="17"></li>
							<li data-target="#carousel-example-generic" data-slide-to="18"></li>
							<li data-target="#carousel-example-generic" data-slide-to="19"></li>
							<li data-target="#carousel-example-generic" data-slide-to="20"></li>
							<li data-target="#carousel-example-generic" data-slide-to="21"></li>
							<li data-target="#carousel-example-generic" data-slide-to="22"></li>
							<li data-target="#carousel-example-generic" data-slide-to="23"></li>
							<li data-target="#carousel-example-generic" data-slide-to="24"></li>
							<li data-target="#carousel-example-generic" data-slide-to="25"></li>
							<li data-target="#carousel-example-generic" data-slide-to="26"></li>
							<li data-target="#carousel-example-generic" data-slide-to="27"></li>
							<li data-target="#carousel-example-generic" data-slide-to="28"></li>
							<li data-target="#carousel-example-generic" data-slide-to="29"></li>
							<li data-target="#carousel-example-generic" data-slide-to="30"></li>
							<li data-target="#carousel-example-generic" data-slide-to="31"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							<div class="item active">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/1.JPG" alt="...">
							 </div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/2.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/3.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/4.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/5.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/6.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/7.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/8.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/9.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/10.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/11.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/12.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/13.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/14.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/15.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/16.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/17.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/18.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/19.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/20.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/21.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/22.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/23.JPG" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/24.jpg" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/24.jpg" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/26.jpg" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/26.jpg" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/28.jpg" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/29.jpg" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/30.jpg" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/31.jpg" alt="...">
							</div>
							<div class="item">
							  <img src="http://inovasipnbandung.id/assets/img/slidekunjungan/32.jpg" alt="...">
							</div>
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
              </div>
            </div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 text-center"> 
                &copy; 2015. &reg;Susilo,NB
                <p>Developed By: <a href="https://www.facebook.com/fahmi.hilmansyah" title="crazysolution || fahmi.hilmansyah@gmail" style="color:white;"><b>crazysolution</b></a></p>
                </div>
            </div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 text-center"><p><a href="http://www.freecounterstat.com" title="website hit counters"><img src="http://counter8.freecounterstat.ovh/private/freecounterstat.php?c=d4c1af7d2911dd998650b869cd20cc15" border="0" title="website hit counters" alt="website hit counters"></a></p>
                </div>
            </div>
        </div>
    </section>
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