<?php if(isset($alert_success)) {?>
<br/>
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
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <h3 class="col-lg-offset-5">Gestion des abonnés</h3>
    </div>
   
	
</div>

<div class="modal fade" id="myDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Desactivation d'un utilisateur
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                Etes vous sur de desactiver cet utilisateur ?
                
              
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Non</button>
                <a type="button" class="btn btn-danger conf_btn" href="<?php echo base_url();?>index.php/admin/delUser/"> Oui</a>
               
                
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
          <h2>Informations abonnés<small>Abonné BLR</small></h2>
        <ul class="nav navbar-right panel_toolbox">
 
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
           <div class="col-md-12 col-sm-12 col-xs-12">

                <ul class="stats-overview">
                  <li>
                    <span class="name">Nom et prénoms </span>
                    <span class="value text-success"> Ama Kwatcha </span>
                  </li>
                  <li>
                    <span class="name">Telephone</span>
                    <span class="value text-success"> 333-33-33 </span>
                  </li>
                  <li class="hidden-phone">
                    <span class="name">Mail</span>
                    <span class="value text-success">ama.kwatcha@comorestelecom.km</span>
                  </li>
                
                </ul>
                <br />
                <ul class="stats-overview">
                  <li>
                    <span class="name">Profil </span>
                    <span class="value text-success"> 7 Mbps </span>
                  </li>
                  <li>
                    <span class="name">Identifiant BLR</span>
                    <span class="value text-success"> 333-33-33 </span>
                  </li>
                  <li>
                    <span class="name">Gestion IP</span>
                    <span class="value text-success"> 333-33-33 </span>
                  </li>
                 
                
                </ul>
                <hr/>
              
                <ul class="stats-overview">
                  <li>
                    <span class="name">SU  </span>
                    <span class="value text-success"> 7 Mbps </span>
                  </li>
                  <li>
                    <span class="name">Modem</span>
                    <span class="value text-success"> 333-33-33 </span>
                  </li>
                  <li>
                    <span class="name">Adresse IP de management</span>
                    <span class="value text-success"> 333-33-33 </span>
                  </li>
                 
                
                </ul>
                <ul class="stats-overview">
                  <li>
                    <span class="name">Node  </span>
                    <span class="value text-success"> 7 Mbps </span>
                  </li>
                  <li>
                    <span class="name">BS</span>
                    <span class="value text-success"> 333-33-33 </span>
                  </li>
                  <li>
                    <span class="name">Coordonnées GPS</span>
                    <span class="value text-success"> 333-33-33 </span>
                  </li>
                 
                
                </ul>
            </div>
      </div>
    </div>
  </div>
</div>


