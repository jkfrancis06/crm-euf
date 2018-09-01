<?php?>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	    <?php if(isset($alert_success)) {?>
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
		<div class="x_panel">
		    <div class="row x_title">
				<div class="col-md-6">
				  <h3>Modification de mot de passe</h3>
				</div>

			</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12">
				<form class="form-horizontal" role="form" action="<?php echo base_url()?>index.php/admin/editmdpUser" method="POST">
		 
				  <div class="form-group">
					<!-- <label  class="col-sm-4 control-label" for="inputEmail3">ID</label> -->	
					<div class="col-sm-4">
						<input type="hidden" class="form-control"  placeholder="Nom" name="user_id" id="user_id" value="<?php if(isset($user_id)) echo $user_id?>"/>
					</div>
				  </div>
				  <div class="form-group">
					<label  class="col-sm-4 control-label" for="inputEmail3">Ancien mot de passe</label>
					<div class="col-sm-4">
						<input type="password" class="form-control"  placeholder="Ancien mot de passe" name="mdp_old" id="mdp_old" value=""/>
					</div>
				  </div>
				  <div class="form-group">
					<label  class="col-sm-4 control-label" for="inputEmail3">Nouveau mot de passe</label>
					<div class="col-sm-4">
						<input type="password" class="form-control"  placeholder="Nouveau mot de passe" name="mdp_new" id="mdp_new" value=""/>
					</div>
				  </div>
				  <div class="form-group">
					<label  class="col-sm-4 control-label" for="inputEmail3">Confirmation mot de passe</label>
					<div class="col-sm-4">
						<input type="password" class="form-control"  placeholder="Confirmation mot de passe" name="mdp_con" id="mdp_con" value=""/>
					</div>
				  </div>
				  <div class="form-group">
					<label  class="col-sm-4 control-label" for="inputEmail3"></label>
					<div class="col-sm-4">
						<a href="" class="btn btn-default">Annuler</a><input type="submit" class="btn btn-primary" value="Modifier"/>
					</div>
				  </div>
				</form>
			</div>
		</div>
	
		
	
	</div>
  
	
            
</div>