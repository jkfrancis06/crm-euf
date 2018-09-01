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



    <div class="x_panel">
      <div class="x_title">
          <h2><img alt="logo_euphorbia" height="35" width="35" src="<?php echo base_url();?>assets/images/pending.png"/>Liste de toutes les installations en attente</h2>
        <ul class="nav navbar-right panel_toolbox">
          
          <li class="dropdown">
          
          </li>
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        
        <table id="datatable-responsive-plan" class="table table-striped table-hover dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th></th>
              <th>ID BLR</th>
              <th>Nom</th>
              <th>Prénoms</th>
               <th>SU</th>
              <th>Modem</th>
              <th>Date d'installation</th>
             
              <th>Actions</th>
              
            </tr>
          </thead>
          <tbody>
            <?php if(isset($install)) echo $install?>
            
          </tbody>
        </table>

      </div>
    </div>
  </div>



