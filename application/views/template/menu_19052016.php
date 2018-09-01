<body class="nav-md">
<div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="" class="site_title"> <span>Amalys TDS</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="<?php echo base_url()?>assets/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Bienvenue</span>
              <h2><?php if(isset($nom)) echo $nom?></h2>
			  <br/><br/>
            </div>
          </div>
          <!-- /menu prile quick info -->

        
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
            
              <ul class="nav side-menu">
                <li><a href="<?php echo base_url()?>index.php/dashboard/"><i class="fa fa-home"></i>Tableau de bord</a>
                </li>
                <li><a><i class="fa fa-edit"></i> Admin <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo base_url()?>index.php/admin/">Gestion des utilisateurs</a>
                    </li>
                    <li><a href="#">Gestion des profils utilisateurs</a>
                    </li>
                    
                  </ul>
                </li>
                <li><a><i class="fa fa-user"></i> Abonnés <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo base_url()?>index.php/subscriber/">Gestion des abonnés</a>
                    </li>
                    <li><a href="<?php echo base_url()?>index.php/subscriber/maintenance">Maintenance</a>
                    </li>
                    <li><a href="<?php echo base_url()?>index.php/subscriber/gpto">Historique GPTo</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop0 fa-object-group"></i> Tatoo Node <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo base_url();?>index.php/Node">Liste</a>
                    </li>
                    <li><a href="<?php echo base_url();?>index.php/Node/create">Ajouter un node</a>
                    </li>
                    
                  </ul>
                </li>
                <li><a href="<?php echo base_url();?>index.php/Bsu" ><i class="fa fa-paw"></i> Tatoo HBS </a>
                  
                </li>
                <li><a><i class="fa fa-desktop"></i> Tatoo HSU <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo base_url();?>index.php/Asu">Liste</a>
                    </li>
                    <li><a href="<?php echo base_url();?>index.php/Asu/create">Ajouter un ASU</a>
                    </li>
                    
                  </ul>
                </li>
                
                
               <!--        -->
		 <li><a><i class="fa fa-desktop0 fa-question-circle"></i> Non enregistrés <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo base_url();?>index.php/Asu/unknown">Liste</a>
                    </li>

                  </ul>
                </li>
               
              </ul>
            </div>
           

          </div>
          <!-- /sidebar menu -->

         
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo base_url()?>assets/images/img.jpg" alt=""><?php if(isset($nom)) echo $nom?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="<?php echo base_url()?>index.php/admin/mypwd">Modifier mot de passe</a>
                  </li>
                  
                  <li><a href="<?php echo base_url()?>index.php/admin/disconnect"><i class="fa fa-sign-out pull-right"></i> Deconnexion</a>
                  </li>
                </ul>
              </li>

             
            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->
     
     
<div class="right_col" role="main">
