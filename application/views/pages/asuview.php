<?php  if(false){ ?>
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
                    Suppression d'un HSU
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
			<div id="deletenodename">
			
			</div>
                Etes vous sur de vouloir supprimer ce HSU?
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Non</button>
                <a type="button" class="btn btn-danger conf_btn" data-hr="<?php echo base_url();?>index.php/asu/delete/" href="<?php echo base_url();?>index.php/asu/delete/"> Oui</a>
               
                
            </div>
        </div>
    </div>
</div>
<?php  } ?>
    <div class="x_panel">
      <div class="x_title">
          <h2></h2>
        <ul class="nav navbar-right panel_toolbox">
          
          <!--li class="dropdown">
           <a href="<?php //echo base_url(); 
		   ?>index.php/asu/create" class="btn btn-success">Ajouter</a>
          </li-->
		   <li class="dropdown">
          <?php
		   echo "<button id='btnSave' alt='Enregistrer' title='Enregistrer au format image' hrefx='' class='btn btn-success' ><i class='fa fa-save' aria-hidden='true'></i></button>";
		  ?>
          </li>
		  <li class="dropdown">
          <?php
		   echo "<a alt='Statut' title='Statut radio' href='".base_url()."index.php/wireless/status/".$hostobj["id"]."' class='btn btn-warning ' data-name='".$hostobj["name"]."' data-id='".$hostobj["id"]."' ><i class='fa fa-plug' aria-hidden='true'></i></a>";
		  ?>
          </li>

		  <li class="dropdown">
		  <?php 
          echo "<a alt='Edition' title='Edition du HSU' href='".base_url()."index.php/asu/edit?id=".$hostobj["id"]."' class='btn btn-primary edit_btn0' data-name='".$hostobj["name"]."' data-id='".$hostobj["id"]."' ><i class='fa fa-edit'></i></a>";
			 ?>
          </li>
		  <?php  if(false){  ?>
		  <li class="dropdown">
		  <?php 
            echo "<a alt='Suppression' title='Suppression du HSU' class='btn btn-danger del_btn' data-name='".$hostobj["name"]."' data-id='".$hostobj["id"]."' data-toggle='modal' data-target='#myDelete'><i class='glyphicon glyphicon-remove'></i></a>";
          ?>
		  </li>
          <?php  }  ?>
        </ul>
        <div class="clearfix"></div>
		
      </div>
      <div class="x_content">
        <div>
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
		<div class="row" id="asuviewcontent">
        <div class="col-sm-10">  
				<?php if(isset($hostobj)){ ?>	
				<input type="hidden" id="id" name="id" value="<?php echo $hostobj["id"]; ?>"/>	
				<?php } else { ?>
                <?php } ?> 
                 <fieldset>

					<div class="row" style="margin-top:5px;">
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nom">Nom</label>  
					  <div class="col-md-8">
					  <input disabled  id="nom" name="nom" type="text" placeh0="Nom" class="form-control input-md"  value="<?php if(isset($hostobj)) echo $hostobj["name"];?>">
					  
					  </div>
					</div>
					</div>
					
					
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="serialno">Numéro de série</label>  
					  <div class="col-md-8">
					  <input disabled  id="serialno" name="serialno" type="text" placeh0="Numéro de série" class="form-control input-md"   value="<?php if(isset($hostobj)) echo $hostobj["serialno"];?>">
					  </div>
					</div>
					</div>
					</div>

					<div class="row" style="margin-top:5px;">
					<div class="col-md-6">
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="deviceTypeId">Type d'équipement</label>
					  <div class="col-md-8">
					  <input disabled  id="deviceTypeId" name="deviceTypeId" type="text" placeh0="type" class="form-control input-md"   
					  value="<?php  foreach($types as $type){
							  if(($hostobj["deviceTypeId"]==$type["id"])){ echo $type["name"];  break;}
						  }?>">
						
					  </div>
					</div>
					</div>
					
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="firmware">Version de l'OS</label>  
					  <div class="col-md-8">
					  <input disabled  id="firmware" name="firmware" type="text" placeh0="os" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["firmware"];?>">
					  </div>
					</div>
					</div>
					</div>
					
					<div class="row" style="margin-top:5px;">
					<div class="col-md-6">
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="node">HBS parent</label>
					  <div class="col-md-8">
					  <input disabled  id="bsu" name="bsu" type="text" placeh0="station de base" class="form-control input-md"   
					  value="<?php foreach($bsus as $bsu){
							   if($hostobj["bsu"]==$bsu["id"]){ echo $bsu["name"]; break;}
						  }?>">
					  </div>
					</div>
					</div>
					
					<div class="col-md-6">
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="networkId">Réseau</label>
					  <div class="col-md-8">
					  <input disabled  id="networkId" name="networkId" type="text" placeh0="station de base" class="form-control input-md"   
					  value="<?php foreach($networks as $network){	 
						if($hostobj["networkId"]==$network["id"]){ echo $network["name"]; break;}
						  } ?>">
						</div>
					</div>
					</div>
					</div>
					

					<div class="row" style="margin-top:5px;">
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="mac">Adresse MAC</label>  
					  <div class="col-md-8">
					  <input disabled  id="mac" name="mac" type="text" placeh0="06:05:08:09:07" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["mac"];?>">
					  </div>
					</div>
					</div>

					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="ipaddr">Adresse IP</label>  
					  <div class="col-md-8">
					  <input disabled  id="ipaddr" name="ipaddr" type="text" placeh0="192.168.0.1" class="form-control input-md" value="<?php if(isset($hostobj)) echo long2ip($hostobj["ipaddr"]);?>">
					  </div>
					</div>
					</div>
					</div>
					<?php if(true){ ?>
					<div class="row" style="margin-top:5px;">
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="map">Carte</label>  
					  <div class="col-md-8">
					  <input disabled  id="map" name="map" type="text" placeh0="Map" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["map"];?>">
					  </div>
					</div>
					</div>
					
					
					<div class="col-md-6">
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="topology">Topologie</label>
					  <div class="col-md-8">
						<input disabled  id="topology" name="topology" type="text" placeh0="station de base" class="form-control input-md"   
					  value="<?php if(isset($hostobj)) echo $hostobj["topology"];?>">
						
					  </div>
					</div>
					</div>
					
					</div>
					<?php } ?>
					
					<div class="row" style="margin-top:5px;">
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="location">Adresse</label>  
					  <div class="col-md-8">
					  <input disabled  id="location" name="location" type="text" placeh0="adresse" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["location"];?>">
					  </div>
					</div>
					</div>
					
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="hbInterval">Intervalle</label>  
					  <div class="col-md-8">
					  <input disabled  id="hbInterval" name="hbInterval" type="text" placeh0="Intervalle" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["hbInterval"];?>">
					  </div>
					</div>
					</div>
					</div>
					
					<div class="row" style="margin-top:5px;">
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="latitude">Latitude</label>  
					  <div class="col-md-8">
					  <input disabled  id="latitude" name="latitude" type="text" placeh0="Latitude" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["latitude"];?>">
					  <!--span class="help-block">Latitude</span-->  
					  </div>
					</div>
					</div>
					
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="longitude">Longitude</label>  
					  <div class="col-md-8">
					  <input disabled  id="longitude" name="longitude" type="text" placeh0="longitude" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["longitude"];?>">
					  </div>
					</div>
					</div>
					</div>
					
					<div class="row" style="margin-top:5px;">
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="latitude_local">Latitude locale</label>  
					  <div class="col-md-8">
					  <input disabled  id="latitude_local" name="latitude_local" type="text" placeh0="latitude locale" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["latitude_local"];?>">
					  </div>
					</div>
					</div>

					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="longitude_local">Longitude locale</label>  
					  <div class="col-md-8">
					  <input disabled  id="longitude_local" name="longitude_local" type="text" placeh0="longitude locale" class="form-control input-md" value="<?php if(isset($hostobj)) echo $hostobj["longitude_local"];?>">
					  </div>
					</div>
					</div>
					</div>
					
					<div class="row" style="margin-top:5px;">
					<div class="col-md-6">
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="statsprofileid">Profile de statistiques</label>
					  <div class="col-md-8">
					  <input disabled  id="statsProfileId" name="statsProfileId" type="text" placeh0="station de base" class="form-control input-md"   
					  value="<?php foreach($stats as $stat){
							if($hostobj["statsProfileId"]==$stat["id"]){ echo  $stat["name"]; break;}
						  } ?>">
						
					  </div>
					</div>
					</div>	
					
					<div class="col-md-6">
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="alarmprofileid">Profile d'alarme</label>
					  <div class="col-md-8">
					   <input disabled  id="alarmProfileId" name="alarmProfileId" type="text" placeh0="station de base" class="form-control input-md"   
					  value="<?php  foreach($alarms as $alarm){
							if($hostobj["alarmProfileId"]==$alarm["id"]){ echo $alarm["name"]; break;}
						  }  ?>">
					  </div>
					</div>
					</div>
					</div>
					
					<?php if(true){ ?>
					<div class="row" style="margin-top:5px;">
					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="registered">Enregistré</label>  
					  <div class="col-md-8">
					   <input disabled  id="registered" name="registered" type="text" placeh0="enregistré" class="form-control input-md"   
					  value="<?php
						if($host["registered"]==1 || $host["registered"]=='1'){
						  echo "oui";
						  } else {
							  echo "Non";
						  }
						?>">
					  </div>
					</div>
					</div>

					<div class="col-md-6">
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="registered">Etat</label>  
					  <div class="col-md-8">
						<?php	  if($hostobj["isDown"]==1 || $hostobj["isDown"]=='1'){
						  echo "<span class='btn btn-danger'><i class='fa fa-toggle-off' aria-hidden='true' title='Injoignable'></i></span>";
						  } else {
						  echo "<span class='btn btn-success'><i class='fa fa-toggle-on' aria-hidden='true' title='En ligne'></i></span>";
						  }
						  ?>
					  </div>
					</div>
					</div>
					</div>
					<?php } ?>
                   
					</fieldset>
					

			</div>
		</div>
      </div>
    </div>
  </div>



