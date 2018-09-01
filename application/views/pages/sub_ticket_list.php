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
          <h3>Problèmes reportés</h3><small> <?php if(isset($nom)) echo $nom;?></small>  |  <small> <?php if(isset($iblr)) echo $iblr;?></small>   
        <ul class="nav navbar-right panel_toolbox">
          
          <li class="dropdown">
              
          </li>
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        
        <table id="datatable-abonne" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Date d'ouverture</th>
              <th>Date de constat</th>
              <th>Motif</th>
              <th>Commentaires du client</th>
              <th>Date d'intervention</th>
              <th>Diagnostic</th>
              <th>Action attemptée</th>
              <th>Commentaires de l'intervenant</th>
              <th>Statut</th>
            
              
            </tr>
          </thead>
          <tbody>
            <?php if(isset($users)) echo $users?>
            
          </tbody>
        </table>

      </div>
    </div>
  </div>



