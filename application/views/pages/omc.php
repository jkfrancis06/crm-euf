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
          <h2>Liste des tickets non traités</h2>
        <ul class="nav navbar-right panel_toolbox">
          
          <li class="dropdown">
              <a href="<?php echo base_url();?>index.php/omc/sub_select" class="btn btn-primary" >Ouvrir un ticket</a>
          </li>
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        
        <table id="datatable-abonne" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Ticket ID</th>
              <th>IDBLR</th>
              <th>Niveau de panne</th>
              <th>Commentaires</th>
              <th>Identité du client</th>
              <th>Statut</th>
              <th>Personne à contacter</th>
              <th>Actions</th>
              
            </tr>
          </thead>
          <tbody>
            <?php if(isset($ticket)) echo $ticket?>
            
          </tbody>
        </table>

      </div>
    </div>
  </div>



