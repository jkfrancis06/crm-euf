<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <h3 class="col-lg-offset-4">Gestion des licences<small><?php //if(isset($modemobj) && $modemobj!=null) echo  ":Edition"; else echo ":Création"; ?></small></h3>
    </div>

</div>
<div class="col-md-12 col-sm-12 col-xs-12">
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
                  <?php if(isset($modemobj)){/* ?>	
				<form class="form-horizontal" enctype="multipart/form-data" role="form" action="<?php echo base_url()."index.php/licence/edit?id=".$modemobj["c_id"];?>" method="POST">	
				<input type="hidden" id="id" name="id" value="<?php echo $modemobj["c_id"]; ?>"/>	
				<?php*/ } else { ?>
                  <form class="form-horizontal" enctype="multipart/form-data" role="form" action="<?php echo base_url();?>index.php/licence/createmany" method="POST">
				<?php } ?> 
                
				
                  <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="longitude" >Fichier CSV</label>
                    <div class="col-sm-8">
                    	<input type="file" class="form-control" name="file" id="file" /><input type="hidden" name="MAX_FILE_SIZE" value="1240000" />
<input type="hidden" name="libelle" value="send"/>
                    </div>
                  </div>

					
                   <div class="form-group">
				    <div class="col-sm-2"></div>
				   <div class="col-sm-4">
					<input type="submit" value="Enregister" class="btn btn-primary btn-block btn-flat"/>
				     </div>
				   <div class="col-sm-4">
					<!--button type="button" class="btn btn-default" data-dismiss="modal"> Fermer</button-->
					<a href="<?php echo base_url()."index.php/"; ?>" class="btn btn-warning btn-block btn-flat">Annuler</a>
					</div>
					
					</div>
					</form>
			</div>	
		</div>
      </div>
    </div>
  </div>
</div>


