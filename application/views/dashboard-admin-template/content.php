<style>
    #wrapper
    {
        background:#9dd53a;
    }
    .navbar
    {
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#7cbc0a+0,509b12+44,a1d54f+69,a1d54f+74,9dd53a+100 */
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#509b12+40,a1d54f+69,a1d54f+74,9dd53a+100 */
        background: rgb(80,155,18); /* Old browsers */
        background: -moz-linear-gradient(45deg, rgba(80,155,18,1) 40%, rgba(161,213,79,1) 69%, rgba(161,213,79,1) 74%, rgba(157,213,58,1) 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left bottom, right top, color-stop(40%,rgba(80,155,18,1)), color-stop(69%,rgba(161,213,79,1)), color-stop(74%,rgba(161,213,79,1)), color-stop(100%,rgba(157,213,58,1))); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(45deg, rgba(80,155,18,1) 40%,rgba(161,213,79,1) 69%,rgba(161,213,79,1) 74%,rgba(157,213,58,1) 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(45deg, rgba(80,155,18,1) 40%,rgba(161,213,79,1) 69%,rgba(161,213,79,1) 74%,rgba(157,213,58,1) 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(45deg, rgba(80,155,18,1) 40%,rgba(161,213,79,1) 69%,rgba(161,213,79,1) 74%,rgba(157,213,58,1) 100%); /* IE10+ */
        background: linear-gradient(45deg, rgba(80,155,18,1) 40%,rgba(161,213,79,1) 69%,rgba(161,213,79,1) 74%,rgba(157,213,58,1) 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#509b12', endColorstr='#9dd53a',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        }  
    .sidebar
    {
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffff88+0,ffff88+100;Yellow+Flat+%231 */
        background: rgb(255,255,136); /* Old browsers */
        background: -moz-linear-gradient(45deg, rgba(255,255,136,1) 0%, rgba(255,255,136,1) 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,rgba(255,255,136,1)), color-stop(100%,rgba(255,255,136,1))); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(45deg, rgba(255,255,136,1) 0%,rgba(255,255,136,1) 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(45deg, rgba(255,255,136,1) 0%,rgba(255,255,136,1) 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(45deg, rgba(255,255,136,1) 0%,rgba(255,255,136,1) 100%); /* IE10+ */
        background: linear-gradient(45deg, rgba(255,255,136,1) 0%,rgba(255,255,136,1) 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffff88', endColorstr='#ffff88',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
    }
    /**
    .background-wrapper
    {
        background-image:url("<?php echo base_url();?>assets/img/header.jpg"); 
        background-repeat: repeat-x;
        height: 180px;
        margin: 0 0 auto 0;
        text-shadow: 0 0 30px white;
        margin-bottom: 30px;
    }
    */
    .tag
    {
       margin-bottom: 80px;
    }
    .img-bg
    { 
        background-image:url("<?php echo base_url();?>assets/img/header-2.jpg"); 
		background-size: 100%;
        background-repeat: repeat-x;
        overflow: hidden;
        top: 0;
        left: 0;
    }
 </style>
  <div id="wrapper"> 
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top bb" role="navigation" style="margin-bottom: 0" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Dashboard</a>
            </div> 
            <!-- /.navbar-header -->
			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
			<?php if(isset($_sidebar)){$this->load->view($_sidebar);}?>
			<ul class="nav" id="side-menu">
				<li>
					<a href="<?php echo site_url("logout");?>">Logout</a>
				</li>
				</ul>
			</div>
			</div>
        </nav>
        <div id="page-wrapper" class="img-bg">
            <div class="row tag">
                <div class="col-lg-12"> 
                    <h1 class="page-header" style="padding-top:80px;"><?php if(isset($_title)){echo $_title;}?></h1>
					<div class="loading-temp"></div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row ">
			<div class="col-md-12 container">
            <?php if(isset($content)){echo $content;}?>
            <?php 
                if(isset($_loadView))
                {
                    foreach ($_loadView as $key => $value) 
                    {
                        $this->load->view($value);
                    }
                }?>
            </div>
			</div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <script>  
<?php
    $flash = $this->session->flashdata('message');
    if(!empty($flash))
    {
            echo "<script>alert('".$flash."');</script>";
    }
?>
    </script>
