<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> AMALYS TNS </title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url()?>assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/icheck/flat/green.css" rel="stylesheet">


  <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
		    <?php if(isset($alert_success)) {?>
			<div class="alert alert-success alert-dismissible fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
				</button><?php echo $alert_success;?>	
			</div>
			<?php } ?>
			<?php if(isset($alert_danger)) {?>
			<div class="alert alert-danger alert-dismissible fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
				</button>
				<?php echo $alert_danger;?>
			</div>
			<?php } ?>
          <img alt="logo_euphorbia" height="100" width="300" src="<?php echo base_url();?>assets/images/tns.png"/>
          <form role="form" action="<?php echo base_url()?>index.php/admin/authenticate" method="POST">
            <h1>Authentification</h1>
            <div>
              <input type="text" name="login" class="form-control" name="login" id="login" placeholder="Nom d'utilisateur" required="" value="<?php if(isset($user_login))echo $user_login;?>"/>
            </div>
            <div>
              <input type="password" name="mdp" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe" required="" />
            </div>
            <div>
              <input type="submit" value="Connexion" class="btn btn-primary"/>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              
              <div class="clearfix"></div>
              <br />
              <div>
                  

                <p>©2014 All Rights Reserved. Wancia Tech. Privacy and Terms</p>
              </div>
            </div>
          </form>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
     
    </div>
  </div>

</body>

</html>
