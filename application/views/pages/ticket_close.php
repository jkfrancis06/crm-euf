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
          <h2>Formulaire de fermerture du ticket</h2>
        <ul class="nav navbar-right panel_toolbox">
          
         
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
         
          <form id="demo-form2" method="POST" action="<?php echo base_url();?>index.php/omc/close_ticket" data-parsley-validate class="form-horizontal form-label-left">
          <input type="hidden" name="ticket_id" value="<?php echo $modif?>"/>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nom & Prénoms<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nom" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($nom_sub)) echo $nom_sub;?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Motif<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="prenom"  required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($motif)) echo $motif;?>" readonly/>
              </div>
            </div>
            
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Diagnostic *</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control col-md-7 col-xs-12" name="diagnostic">
                      <?php if(isset($diagnostic)) echo $diagnostic;?>
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Action attempté *</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control col-md-7 col-xs-12" name="depannage">
                      <?php if(isset($action)) echo $action;?>
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Commentaires *</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="modem" class="form-control col-md-7 col-xs-12"  name="comment" cols="30" rows="5"></textarea>
              </div>
            </div>
            
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <a type="submit" href="../" class="btn btn-primary">Annuler</a>
                <input type="submit" value="Enregistrer" class="btn btn-success"/>
              </div>
            </div>

        </form>

      </div>
    </div>
  </div>



