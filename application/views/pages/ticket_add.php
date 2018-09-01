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
        <h3 class="col-lg-offset-5">Operating Monitoring Center</h3>
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
          <h2>Formulaire d'ouverture de ticket</h2>
        <ul class="nav navbar-right panel_toolbox">
          
         
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
         
          <form id="demo-form2" method="POST" action="<?php echo base_url();?>index.php/omc/save_ticket" data-parsley-validate class="form-horizontal form-label-left">
          <input type="hidden" name="sub_id" value="<?php echo $modif?>"/>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nom <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nom" name="nom" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($nom_sub)) echo $nom_sub;?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Prénoms<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="prenom" name="prenom" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($prenom)) echo $prenom;?>" readonly/>
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" >Motif  *</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="motif_id" id="motif_id">
                     <?php if(isset($motifs)) echo $motifs;?>
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Date de début *</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="installday" class="date-picker form-control col-md-7 col-xs-12" type="text" name="date_deb"  required="required" value="<?php if(isset($date)) echo $date;?>">
              </div>
            </div>
             <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Coordonnées de la personne à contacter *</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="modem" class="form-control col-md-7 col-xs-12" type="text" name="contact" value="<?php if(isset($contact)) echo $contact;?>"  required="required">
              </div>
            </div>
             <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Commentaires *</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="modem" class="form-control col-md-7 col-xs-12"  name="comment" cols="30" rows="5"><?php if(isset($contact)) echo $contact;?></textarea>
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
</div>


