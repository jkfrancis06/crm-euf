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
    <div class="x_panel">
   
        <div class="x_title">
            <h2>Installations<small>HISTORIQUE</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <span id="info"></span>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <form action="" method="POST">
    <div class="x_content">
       
        <table data-toggle='table' data-show-columns='false' data-show-toggle='false'  data-url="<?php if(isset($session_url) ) echo $session_url;?>" data-show-refresh='true' data-local='fr_FR' data-height='' data-striped='true' data-pagination='true' data-page-size='10' data-page-list='[5, 10, 20, 50, 100, 200]' data-search='true' id='session'>
            <thead>
                <tr>
                 
                  <th data-field='hdate' data-sortable='true'>Date d'installation</th>
                  <th data-field='nbre_install'>Nombre d'installation</th>
                  


                </tr>
            </thead>
            <tbody>
                <?php if(isset($radius_state)) echo $radius_state;?>

            </tbody>
        </table>
      
    </div>
  

</div>
    </div>
</div>