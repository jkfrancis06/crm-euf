<body class="nav-md" >
<div class="container body" id="lemenu">


    <div class="main_container" >

      <div class="col-md-3 left_col" >
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0; ">
             <img alt="logo_euphorbia" height="80" width="200" src="<?php echo base_url();?>assets/images/tns.png"/>
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
                <?php if(isset($link) && in_array('admin', $link)){ ?>
                <li><a><i class="fa fa-edit"></i> Administration <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <?php if(isset($link_2) && in_array('user', $link_2)){ ?>
                    <li><a href="<?php echo base_url()?>index.php/admin/">Gestion des utilisateurs</a>
                    </li>
                    <?php }?>
                    <?php if(isset($link_2) && in_array('profil', $link_2)){ ?>
                    <li><a href="<?php echo base_url()?>index.php/profile">Gestion des profils utilisateurs</a>
                    </li>
                    <?php }?>
                  </ul>
                </li>
                <?php }?>
                <?php if(isset($link) && in_array('sim', $link)){ ?>
                <li><a><i class="fa fa-user"></i>SIM Module<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <?php if(isset($link_2) && in_array('survey', $link_2)){ ?>
                    <li><a href="<?php echo base_url()?>index.php/subscriber/">Dossiers d'étude</a>
                    </li>
                    <?php }?>
                    <?php if(isset($link_2) && in_array('installation', $link_2)){ ?>
                    <li><a href="<?php echo base_url()?>index.php/subscriber/list_all_install">Installations en attentes</a>
                    </li>
                    <?php }?>
                    <?php if(isset($link_2) && in_array('installation', $link_2)){ ?>
                    <li><a href="<?php echo base_url()?>index.php/subscriber/install_plan">Installations par date</a>
                    </li>
                    <?php }?>
                    <?php if(isset($link_2) && in_array('subscriber', $link_2)){ ?>
                    <li><a href="<?php echo base_url()?>index.php/subscriber/all">Abonnés installés</a>
                    </li>
                    <?php }?>
                    <?php if(isset($link_2) && in_array('settings', $link_2)){ ?>
                    <li><a href="<?php echo base_url()?>index.php/subscriber/settings">Parametres</a>
                    </li>
                    <?php }?>
                  </ul>
                </li>
                <?php }?>
                <?php if(isset($link) && in_array('omc', $link)){ ?>
                <li>
                    
                    <a><i class="fa fa-bars"></i> OMC Module <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                        <?php if(isset($link_2) && in_array('ticket', $link_2)){ ?>
                        <li><a href="<?php echo base_url();?>index.php/omc">Gestion des Tickets</a></li>
                        <?php }?>
                        <?php if(isset($link_2) && in_array('folder', $link_2)){ ?>
                        <li><a href="<?php echo base_url();?>index.php/omc/list_sub">Dossiers clients</a></li>
                        <?php }?>
                        <?php if(isset($link_2) && in_array('diagnostics', $link_2)){ ?>
                        <li><a href="<?php echo base_url();?>index.php/omc/list_diagnostic">Diagnostics</a></li>
                        <?php }?>
                        <?php if(isset($link_2) && in_array('intervention', $link_2)){ ?>
                        <li><a href="<?php echo base_url();?>index.php/omc/list_depannage">Interventions</a></li>
                        <?php }?>
                    </ul>
                </li>
                <?php }?>
                <?php if(isset($link) && in_array('node', $link)){ ?>
                <li><a href="<?php echo base_url();?>index.php/Node"><i class="fa fa-desktop0 fa-object-group"></i> Tatoo Node</a>
                </li>
                <?php }?>
                <?php if(isset($link) && in_array('hbs', $link)){ ?>
                <li><a href="<?php echo base_url();?>index.php/Bsu" ><i class="fa fa-paw"></i> Tatoo HBS </a>
                  
                </li>
                <?php }?>
                <?php if(isset($link) && in_array('hsu', $link)){ ?>
                <li><a href="<?php echo base_url();?>index.php/Asu"><i class="fa fa-desktop"></i> Tatoo HSU</a>
                    
                </li>
                <?php }?>
                <?php if(isset($link) && in_array('pppoe', $link)){ ?>
                <li><a href="<?php echo base_url();?>index.php/dashboard/activepppoe"><i class="fa fa-spinner"></i> Sessions PPPoE</a>
                    
                </li>
                
                <?php }?>
                <?php if(isset($link) && in_array('unknown', $link)){ ?>
               <!--        -->
		 <li><a href="<?php echo base_url();?>index.php/Asu/unknown"><i class="fa fa-desktop0 fa-question-circle"></i> Non enregistrés</a>

                </li>
                <?php }?>
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
     
     
<div class="right_col" id="pT" role="main">

    <div class="">