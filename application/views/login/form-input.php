<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Login - Sistem Informasi Pelimpahan Perkara</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("assets/startbootstrap-sb-admin/bower_components/bootstrap/dist/css/bootstrap.min.css");?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("assets/login/signin.css");?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/animated.css");?>" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  
    <div class="container">


        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="animated flip panel panel-success">
              <div class="panel-heading">
              <div class="row">
                <div class="col-md-2">
                  <img src="<?php echo base_url();?>assets/logo1.png" width="100%" height="auto" alt="Pengadilan Negeri Bandung">
                </div>
                <div class="col-md-6">
                  <h3>Sistem Informasi <br>Pelimpahan Perkara </h3>
                </div>
              </div>
              </div>
              <div class="panel-body">
                <form class="" method="POST">
                  <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <label for="inputEmail" class="sr-only">Username</label>
                        <input type="text" id="inputEmail" name="username" class="form-control" placeholder="username" required autofocus>
                  </div>
                  <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="checkbox">
                  </div>
                  <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="this.form.action='<?php echo site_url("loginResponse");?>'">Sign in</button>
                </form>
              </div>
              <div class="panel-footer">
                <center>
                  <p style="margin-left:-12px;">Sistem Informasi Pelimpahan Perkara &copy;<?php echo date("Y");?> Susilo NB.</p>
                  <p>Developed By: <a href="#" title="crazysolution"><b>crazysolution</b></a></p>
                </center>

              </div>
            </div>
          </div>
        </div>

      

    </div> <!-- /container -->
<?php
	$flash = $this->session->flashdata('message');
	if(!empty($flash))
	{
			echo "<script>alert('".$flash."');</script>";
	}
?>

  </body>
</html>
