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
    <form method="POST" action="<?php echo base_url();?>index.php/profile/test">
        <div class="form-group">
            <label>Ajouter un module au profil <?php if(isset($profil)) echo $profil;?></label>
            
            <select name="test[]" class="select2_multiple form-control" multiple="multiple">
<!--              <option>Choose option</option>
              <option value="1">Option one</option>
              <option value="2">Option two</option>
              <option value="3">Option three</option>
              <option value="4">Option four</option>
              <option>Option five</option>
              <option>Option six</option>-->
                <?php if(isset($no_sel)) echo $no_sel;?>
            </select>
           
        </div>
        <input type="submit"/>
    </form>
    
</div>
<div class="x_panel">
    <div class="">
        <table id="datatable-sel" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>

                <th>Libelle</th>
                <th>Action</th>



              </tr>
            </thead>
            <tbody>
              <?php if(isset($selected)) echo $selected;?>

            </tbody>
        </table>
        
    </div>
   
    





    


</div>
 
</div>


