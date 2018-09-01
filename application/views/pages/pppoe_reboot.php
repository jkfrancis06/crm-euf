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
    
    
    <div class="x_content">
       
        <p id="global">
            Veuillez cliquer sur ce bouton pour redemarrer le BRAS 
            <button id="reboot" class="btn btn-danger">Redemarrer</button>
        </p>
        <form id="demo-form2" method="POST" t_url="<?php echo base_url();?>index.php/bras/c_reboot" c_url="<?php echo base_url();?>index.php/bras/c_reboot_check" data-parsley-validate class="form-horizontal form-label-left">
            <div class="form-group">
              
                <textarea class="form-control" name="interface" id="interface" rows="8">

                   
                </textarea>
          
            </div>
            

        </form>

        
    </div>
        


</div>