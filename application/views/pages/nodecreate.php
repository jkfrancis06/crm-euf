<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <h3 class="col-lg-offset-4">Gestion des nodes: <small><?php if(isset($nodeobj) && $nodeobj!=null) echo  "Edition"; else echo "Création";?></small></h3>
    </div>

</div>
    <div class="x_panel">
      
        <div class="x_content" style="max-height: 410px !important;">
	  <div class="row">
		<div class="col-sm-8 col-sm-offset-2">
		<div id="errormsg" class='' style="color:red;">
					  <?php 
						if(isset($errormessage) && trim($errormessage)!="") echo "<p class='alert alert-error'>$errormessage</p>" ;
						if(isset($error_message) && trim($error_message)!="") echo "<p class='alert alert-error'>$error_message</p>" ;
                        if(isset($errormsg) && trim($errormsg)!="") echo "<p class='alert alert-error'>$errormsg</p>" ;
					    echo validation_errors("<p class='alert alert-danger'>","</p>");
						if(isset($_GET['type']) && $_GET['type']=='error'){
						echo "<p class='alert alert-danger'>$msg</p>";
					   }
					  ?>
					  </div>
					  <div id="succesmsg" class='' style="color:green">
						<?php  
							if(isset($succesmessage) && trim($succesmessage)!="") echo "<p class='alert alert-success'>$succesmessage</p>" ;
                    if(isset($success_message) && trim($success_message)!="") echo "<p class='alert alert-success'>$success_message</p>" ;
                    if(isset($succesmsg) && trim($succesmsg)!="") echo "<p class='alert alert-success'>$succesmsg</p>" ;
					if(isset($_GET['type']) && ($_GET['type']=='succes' || $_GET['type']=='success')){
						echo "<p class='alert alert-success'>$msg</p>";
					   }
						 ?>
					  </div>
		</div>
		</div>
        <div class="row">
		<div class="col-sm-5 col-sm-offset-3">  
                  <?php if(isset($nodeobj)){ ?>	
				<form class="form-horizontal" role="form" action="<?php echo base_url()."index.php/node/edit?id=".$nodeobj["c_id"];?>" method="POST">	
				<input type="hidden" id="id" name="id" value="<?php echo $nodeobj["c_id"]; ?>"/>	
				<?php } else { ?>
                  <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/node/create" method="POST">
				<?php } ?> 
                
				<div class="form-group">
                    <label  class="col-sm-4 control-label" for="nom">Nom</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nom" placeholder="nom" name="nom" id="nom" value="<?php if(isset($nodeobj)) echo $nodeobj["c_nom"];?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"for="latitude" >Latitude</label>
                    <div class="col-sm-8">
                        <input type="number" step="any" class="form-control" placeholder="latitude" name="latitude" id="latitude" value="<?php if(isset($nodeobj)) echo $nodeobj["c_latitude"];?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="longitude" >Longitude</label>
                    <div class="col-sm-8">
                        <input type="number" step="any" class="form-control"  placeholder="longitude" name="longitude" id="longitude" value="<?php if(isset($nodeobj)) echo $nodeobj["c_longitude"];?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="adrip">Adresse IP</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="192.168.1.1" name="adrip" id="adrip" value="<?php if(isset($nodeobj)) echo $nodeobj["c_ip"];?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="description">Description</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="description" placeholder="description" name="description" id="description" value="<?php if(isset($nodeobj)) echo $nodeobj["c_description"];?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="quartier">Quartier</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="quartier" placeholder="quartier" name="quartier" id="quartier" value="<?php if(isset($nodeobj)) echo $nodeobj["c_quartier"];?>"/>
                    </div>
                  </div>
				  <div class="form-group has-feedback">
                          <label class="col-sm-4 control-label" for="date_ins">Date d'installation</label>
						   <div class="col-sm-8">
						  <div class="input-group date">
                          <input name="date_ins" value="<?php if(isset($nodeobj)) echo getFrenchDateFromEnglishDate($nodeobj["c_date_ins"]); ?>" required="true" min-length="8" id="date_ins" type="text" class="form-control" placeholder=""/>
						  <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
						  </div>
						  </div>
                    </div>
					<!--div class="form-group has-feedback">
                          <label class="col-sm-4 control-label" for="date_cre">Date de création</label>
						   <div class="col-sm-8">
						  <div class="input-group date">
                          <input name="date_cre" value="<?php //if(isset($nodeobj)) echo getFrenchDateFromEnglishDate($nodeobj["c_date_cre"]); else echo date("d-m-Y"); ?>" required="true" min-length="8" id="date_cre" type="text" class="form-control" placeholder=""/>
						  <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
						  </div>
						  </div>
                    </div-->
                   <div class="form-group">
				    <div class="col-sm-2"></div>
				   <div class="col-sm-4">
					<input type="submit" value="Enregister" class="btn btn-primary btn-block btn-flat"/>
				     </div>
				   <div class="col-sm-4">
					<!--button type="button" class="btn btn-default" data-dismiss="modal"> Fermer</button-->
					<a href="<?php echo base_url()."index.php/node/"; ?>" class="btn btn-warning btn-block btn-flat">Annuler</a>
					</div>
					
					</div>
					</form>
			</div>	
		</div>
      </div>
    </div>
  </div>



