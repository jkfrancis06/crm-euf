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
                    Annulation de demande
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                Etes vous sur d'annuler cette demande ?
                
              
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Non</button>
                <a type="button" class="btn btn-danger conf_btn" href="<?php echo base_url();?>index.php/subscriber/cancel_sub/"> Oui</a>
               
                
            </div>
        </div>
    </div>
</div>

    <div class="x_panel">
      <div class="x_title">
          <form method="POST" action="<?php echo base_url();?>index.php/subscriber/">Dossiers : <select name="state" id="state"><option <?php if(isset($state) && $state == 0) echo 'selected';?> value="0">Non traités</option><option <?php if(isset($state) && $state == 1) echo 'selected';?> value="1">Eligible</option><option <?php if(isset($state) && $state == 2) echo 'selected';?> value="2">Non Eligible</option></select> <input type="submit" value="Trier"/></form>
        <ul class="nav navbar-right panel_toolbox">
          
          <li class="dropdown">
              <a href="<?php echo base_url();?>index.php/subscriber/add_sub/addform" class="btn btn-success" >Ajouter une demande de survey</a>
          </li>
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        
        <table id="datatable-abonne" class="table table-striped table-hover dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th></th>
              <th>Nom</th>
              <th>Prénoms</th>
              <th>Tel</th>
              <th>Ville</th>
              <th>Quartier</th>
              <th>Profil</th>
              <th>Statut</th>
              <th>Auteur</th>
              <th>Gestionnaire</th>
              
              <th>Actions</th>
              
            </tr>
          </thead>
          <tbody>
            <?php if(isset($users)) echo $users?>
            
          </tbody>
        </table>

      </div>
    </div>
  </div>



