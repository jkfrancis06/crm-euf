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
          <h2> <img alt="logo_euphorbia" height="35" width="35" src="<?php echo base_url();?>assets/images/settings.png"/> Parametrages du module SIM</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li>
               
            </li>
         
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
         
          <form id="demo-form2" method="POST" action="<?php echo base_url();?>index.php/subscriber/set_settings" data-parsley-validate class="form-horizontal form-label-left">
            
            
            <div class="form-group">
              <label class="control-label col-md-3" for="first-name">Nombre de survey / Jours<span class="required">*</span>
              </label>
              <div class="col-md-2">
                  <input type="text" id="nom" name="survey" required="required" class="form-control" value="<?php if(isset($survey)) echo $survey;?> " placeholder=""/>
              </div>
            
            </div>
            <div class="form-group">
              <label class="control-label col-md-3" for="first-name">Nombre d'installations / Jours<span class="required">*</span>
              </label>
              <div class="col-md-2">
                  <input type="text" id="nom" name="install" required="required" class="form-control" value="<?php if(isset($install)) echo $install;?>" placeholder=""/>
              </div>
            
            </div>
            <div class="form-group">
              <label class="control-label col-md-3" for="first-name">Nombre d'interventions / Jours<span class="required">*</span>
              </label>
              <div class="col-md-2">
                  <input type="text" id="nom" name="maintenance" required="required" class="form-control" value="<?php if(isset($maintenance)) echo $maintenance;?>" placeholder=""/>
              </div>
            
            </div>
            
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                
                  <input type="submit" value="Enregistrer" class="btn btn-success"/>
              </div>
            </div>

        </form>

      </div>
    </div>
  </div>




