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
        <h3 class="col-lg-offset-5">Rapport de survey </h3>
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
          <h2>Formulaire de rapport de survey</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li>
                <a class="btn btn-primary"><i class="glyphicon glyphicon-trash"></i> Supprimer le rapport</a>
            </li>
         
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
         
          <form id="demo-form2" method="POST" action="<?php echo base_url();?>index.php/subscriber/save_survey" data-parsley-validate class="form-horizontal form-label-left">
            <div class="form-group">
           
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="hidden" id="id_survey" name="id_survey" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($id_survey)) echo $id_survey;?> " />
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="hidden" id="id_cli" name="id_cli" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($id_cli)) echo $id_cli;?> " />
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nom et prenoms<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nom_cli" name="nom_cli" required="required" class="form-control col-md-7 col-xs-12"  value="<?php if(isset($nom_sub)) echo $nom_sub;?> <?php if(isset($prenom)) echo $prenom;?>" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3" for="first-name">GPS*<span class="required">*</span>
              </label>
              <div class="col-md-3">
                  <input type="number" id="longitude" name="longitude" required="required" class="form-control" value="" placeholder="longitude"/>
              </div>
              
              </label>
              <div class="col-md-3">
                  <input type="number" id="latitude" name="latitude" required="required" class="form-control" value="" placeholder="latitude"/>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Besoin en mat<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="mat" name="mat" class="form-control"><option value="0">Non</option><option value="3">3 m </option><option value="6">6 m</option><option value="7">Plus de 6 m</option></select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Besoin en câble<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="cable" name="cable" class="form-control"><option value="10">10 m</option><option value="20">20 m </option><option>Plus de 20 m</option></select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Node à vue<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="node" name="node" class="form-control"><?php if(isset($nodes)) echo $nodes;?></select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Meilleur receptivité<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="bs" name="bs" class="form-control"><?php if(isset($hbs)) echo $hbs;?></select>
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Eligibilité<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="eligibilite" id="eligibilite"><option value="2">Non</option><option value="1">Oui</option></select>
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


