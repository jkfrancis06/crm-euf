<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <h3 class="col-lg-offset-5">Gestion des HSU: <small><?php if(isset($hostobj) && $hostobj!=null) echo  "Edition"; else echo "Création";?></small></h3>
    </div>	
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_content">
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
		<div class="col-sm-10">  
				<?php if(isset($hostobj)){ ?>	
				<form class="form-horizontal" role="form" action="<?php echo base_url()."index.php/asu/edit?id=".$hostobj["id"];?>" method="POST">	
				<input type="hidden" id="id" name="id" value="<?php echo $hostobj["id"]; ?>"/>	
				<?php } else { ?>
                  <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/asu/create" method="POST">
				<?php } ?> 
                 <fieldset>

					<!-- Form Name -->
					<?php /* if(isset($hostobj)){ ?>	
					<legend>Edition de HSU</legend>
					<?php } else { ?>
					<legend>Création de HSU</legend>
					<?php }*/ ?> 

					<div class="row">
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nom">Nom</label>  
					  <div class="col-md-8">
					  <input id="name" name="name" type="text" placeholder="Nom" class="form-control input-md" required="" value="<?php if(isset($hostobj)) echo $hostobj["name"];?>">
					  
					  </div>
					</div>
					</div>
					
					
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="serialno">Numéro de série</label>  
					  <div class="col-md-8">
					  <input id="serialno" name="serialno" type="text" placeholder="Numéro de série" class="form-control input-md" required=""  value="<?php if(isset($hostobj)) echo $hostobj["serialno"];?>">
					  </div>
					</div>
					</div>
					</div>

					<div class="row">
					<div class="col-md-6">
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="deviceTypeId">Type d'équipement</label>
					  <div class="col-md-8">
						<select id="deviceTypeId" name="deviceTypeId" class="form-control">
						<?php if(!isset($hostobj))  echo "<option value='' selected></option>";?>
						  <?php  foreach($types as $type){
							  echo "<option value='".$type["id"]."' ";
							  if(isset($hostobj) && (($hostobj["deviceTypeId"]==$type["id"]) || (isset($changeasu) && $changeasu==1 && $type["id"]==ASU_ID))) echo "selected";
							  echo ">".$type["name"]."</option>";
						  } ?>
						</select>
					  </div>
					</div>
					</div>
					
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="firmware">Version de l'OS</label>  
					  <div class="col-md-8">
					  <input id="firmware" name="firmware" type="text" placeholder="os" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["firmware"];?>">
					  </div>
					</div>
					</div>
					</div>
					
					
					

					<div class="row">
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="mac">Adresse MAC</label>  
					  <div class="col-md-8">
					  <input id="mac" name="mac" type="text" placeholder="06:05:08:09:07" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["mac"];?>">
					  </div>
					</div>
					</div>

					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="ipaddr">Adresse IP</label>  
					  <div class="col-md-8">
					  <input id="ipaddr" name="ipaddr" type="text" placeholder="192.168.0.1" class="form-control input-md" value="<?php if(isset($hostobj)) echo long2ip($hostobj["ipaddr"]);?>">
					  </div>
					</div>
					</div>
					</div>
					<?php if(false){ ?>
					<div class="row">
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="map">Carte</label>  
					  <div class="col-md-8">
					  <input id="map" name="map" type="text" placeholder="Map" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["map"];?>">
					  </div>
					</div>
					</div>
					
					
					<div class="col-md-6">
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="topology">Topologie</label>
					  <div class="col-md-8">
						<select id="topology" name="topology" class="form-control">
						<?php if(!isset($hostobj))  echo "<option value='' selected></option>";?>
						  <option value="1">Topologie</option>
						  <?php 
						  // if($hostobj["networkId"]==$network["id"]) echo "selected";
						  ?>
						</select>
					  </div>
					</div>
					</div>
					
					</div>
					<?php } ?>
					
					<div class="row">
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="location">Adresse</label>  
					  <div class="col-md-8">
					  <input id="location" name="location" type="text" placeholder="adresse" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["location"];?>">
					  </div>
					</div>
					</div>
					
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="hbInterval">Intervalle</label>  
					  <div class="col-md-8">
					  <input id="hbInterval" name="hbInterval" type="number" step="any"   placeholder="Intervalle" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["hbInterval"];?>">
					  </div>
					</div>
					</div>
					</div>
					
					<div class="row">
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="latitude">Latitude</label>  
					  <div class="col-md-8">
					  <input id="latitude" name="latitude" type="number" step="any"   placeholder="Latitude" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["latitude"];?>">
					  <!--span class="help-block">Latitude</span-->  
					  </div>
					</div>
					</div>
					
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="longitude">Longitude</label>  
					  <div class="col-md-8">
					  <input id="longitude" name="longitude" type="number" step="any"   placeholder="longitude" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["longitude"];?>">
					  </div>
					</div>
					</div>
					</div>
					
					<div class="row">
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="latitude_local">Latitude locale</label>  
					  <div class="col-md-8">
					  <input id="latitude_local" name="latitude_local" type="number" step="any"   placeholder="latitude locale" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["latitude_local"];?>">
					  </div>
					</div>
					</div>

					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="longitude_local">Longitude locale</label>  
					  <div class="col-md-8">
					  <input id="longitude_local" name="longitude_local" type="number" step="any"   placeholder="longitude locale" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["longitude_local"];?>">
					  </div>
					</div>
					</div>
					</div>
					
					<div class="row">
					<div class="col-md-6">
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="statsprofileid">Profile de statistiques</label>
					  <div class="col-md-8">
						<select id="statsProfileId" name="statsProfileId" class="form-control">
						<?php if(!isset($hostobj) || empty($hostobj["statsProfileId"]))  echo "<option value='' selected></option>";?>
						   <?php  foreach($stats as $stat){
							  echo "<option value='".$stat["id"]."' ";
							   if(isset($hostobj) &&  $hostobj["statsProfileId"]==$stat["id"]) echo "selected";
							  echo ">".$stat["name"]."</option>";
						  } ?>
						</select>
					  </div>
					</div>
					</div>	
					
					<div class="col-md-6">
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="alarmprofileid">Profile d'alarme</label>
					  <div class="col-md-8">
						<select id="alarmProfileId" name="alarmProfileId" class="form-control">
						<?php if(!isset($hostobj) || empty($hostobj["alarmProfileId"]))  echo "<option value='' selected></option>";?>
						  <?php  foreach($alarms as $alarm){
							  echo "<option value='".$alarm["id"]."' ";
							  if(isset($hostobj) &&  $hostobj["alarmProfileId"]==$alarm["id"]) echo "selected";
							  echo ">".$alarm["name"]."</option>";
						  } ?>
						</select>
					  </div>
					</div>
					</div>
					</div>
					
					<div class="row">
					<!--div class="col-md-6">
					<div class="form-group">
					  <label class="col-md-4 control-label" for="node">BSU parent</label>
					  <div class="col-md-8">
						<select id="bsu" name="bsu" class="form-control" required>
						<?php /*if(!isset($hostobj) || empty($hostobj["bsu"]))  echo "<option value='' selected></option>";?>
						 <?php  foreach($bsus as $bsu){
							  echo "<option value='".$bsu["id"]."' ";
							   if(isset($hostobj) && $hostobj["bsu"]==$bsu["id"]) echo "selected";

							  echo ">".$bsu["name"]."</option>";
						  }*/ ?>
						</select>
					  </div>
					</div>
					</div-->
					
					<div class="col-md-6">
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="networkId">Réseau</label>
					  <div class="col-md-8">
						<select id="networkId" name="networkId" class="form-control">
						<?php if(!isset($hostobj) || empty($hostobj["networkId"]))  echo "<option value='' selected></option>";?>
						   <?php  foreach($networks as $network){
							  echo "<option value='".$network["id"]."' ";
							    if(isset($hostobj) && $hostobj["networkId"]==$network["id"]) echo "selected";
							  echo ">".$network["name"]."</option>";
						  } ?>
						</select>
					  </div>
					</div>
					</div>
					</div>
					
					<?php if(true){ ?>
					<div class="row">
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="registered"></label>  
					  <div class="col-md-8">
					  <div class="checkbox">
						<label for="enregistre-0">
						  <input type="checkbox" name="registered" id="registered" value="1"  <?php if(!isset($hostobj) || trim($hostobj["registered"])==1) echo "checked";  ?>/>
						  Enregistré
						</label>
						</div>
					  </div>
					</div>
					</div>

					<div class="col-md-6">
					<!-- Text input-->
					</div>
					</div>
					<?php } ?>
                   <div class="form-group">
				   				    <div class="col-sm-2"></div>
					<div class="col-sm-4">
					<input type="submit" value="Enregister" class="btn btn-block btn-flat btn-primary"/>
				     </div>
				   <div class="col-sm-4">
					<!--button type="button" class="btn btn-default" data-dismiss="modal"> Fermer</button-->
					<a href="<?php echo base_url()."index.php/asu/"; ?>" class="btn btn-warning btn-block btn-flat">Annuler</a>
					</div>

					</div>
					</fieldset>
					</form>

			</div>	
		</div>
      </div>
    </div>
  </div>
</div>


