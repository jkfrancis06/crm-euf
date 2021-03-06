
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
			<div id="deletenodename"></div>
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
 
      <div class="x_content">
        <div class="row">
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
		
		<div class="row">
        <table 
		data-toggle='table' data-show-columns='false' data-show-toggle='false' data-show-refresh='true'
                       data-local='fr_FR' data-height='600' data-striped='true' data-pagination='true' data-page-size='10'
                        data-page-list='[5, 10, 20, 50, 100, 200]' data-search='true' id='example_1'
		<?php /*id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" */?>
		>
          <thead>
            <tr>
			  <th  data-field='id' data-visible='false' data-sortable='true'>id</th> 
              <th data-sortable='true'>Nom</th>
              <!--th>Numéro de série</th>
              <th>Type</th>
              <th>Version de l'OS</th-->
			  <th data-sortable='true'>HBS parent</th>
			  <!--th>Réseau</th>
              <th>Adresse MAC</th-->
              <th data-sortable='true'>Adresse IP</th>
              <!--th>Cartes</th>
              <th>Topologie</th>
              <th>Adresse</th>-->
              <th data-sortable='true'>RSSI</th>
              <th data-sortable='true'>Dernier contact</th>
				<!--th>Latitude</th>
              <th>Longitude</th>
			   <!--th>Latitude locale</th>
              <th>Longitude locale</th>
			   <th>Profile de statistique</th>
              <th>Profile d'alarme</th-->
			  <th data-sortable='true'>Etat</th>
			  <!--th>Enregistré</th-->
              <th>Actions</th>
              
            </tr>
          </thead>
          <tbody>
           <?php if($hosts!=null && count($hosts)>0){ 
		   foreach($hosts as $host){
			   echo "<tr>";
			echo "<td>".$host["id"]."</td>";
			echo "<td>".$host["name"]."</td>";	
			//echo "<td>".$host["serialno"]."</td>";
			/*echo "<td>";
			  foreach($types as $type){
				  if(trim($type["id"])==trim($host["deviceTypeId"])){ echo $type["name"]; break;}
			  } 
			echo "</td>";
			echo "<td>".$host["firmware"]."</td>";*/
			
			echo "<td>";
			foreach($bsus as $bsu){
			  if(trim($bsu["id"])==trim($host["bsu"])){ echo $bsu["name"]; break;}
			} 
			;
			echo "</td>";
			
			/*echo "<td>";
			foreach($networks as $network){
				if(trim($network["id"])==$host["networkId"]){ echo $network["name"]; break;}
			}
			echo "</td>";*/
			//echo "<td>".$host["mac"]."</td>";
			 echo "<td>".long2ip($host["ipaddr"])."</td>";
			/*echo "<td>".$host["map"]."</td>";
			echo "<td>".$host["topology"]."</td>";
			echo "<td>".$host["location"]."</td>";
			echo "<td>".$host["hbInterval"]."</td>";*/
                         if($host["rssi"]<=-78){
                            if (empty ($host["rssi"]) || $host["rssi"] == "") {
                                echo "<td><span class='btn btn-warning'>Valeur introuvable</span></td>";
                            }else{
                                echo "<td><span class='btn btn-danger'>".$host["rssi"]."</span></td>";
                            }
			  
			  } else{
			  echo "<td><span class='btn btn-success'>".$host["rssi"]."</span></td>";
			  }
                         echo "<td>".$host["updated"]."  GMT+01</td>";
//			echo "<td>".$host["latitude"]."</td>";
//			echo "<td>".$host["longitude"]."</td>";
			/* echo "<td>".$host["latitude_local"]."</td>";
			 
			 echo "<td>".$host["longitude_local"]."</td>";
			

			echo "<td>";
			 foreach($stats as $stat){
			  if(trim($stat["id"])==trim($host["statsProfileId"])){ echo $stat["name"]; break;}
			} 
			
			echo "</td>";
			 echo "<td>";
			 foreach($alarms as $alarm){
			  if(trim($alarm["id"])== $host["alarmProfileId"]){ echo $alarm["name"]; break;}
			}
			 echo "</td>"; */
			 
			 if($host["isDown"]==1 || $host["isDown"]=='1'){
			  echo "<td><span class='btn btn-danger'><i class='fa fa-toggle-off' aria-hidden='true' title='Injoignable'></i></span></td>";
			  } else {
			  echo "<td><span class='btn btn-success'><i class='fa fa-toggle-on' aria-hidden='true' title='En ligne'></i></span></td>";
			  }
			  
			/*  if($host["registered"]==1 || $host["registered"]=='1'){
			  echo "<td>oui</td>";
			  } else {
				  echo "<td>Non</td>";
			  }*/
			  
			 echo "<td>";
			 echo "<a alt='Détails' title='Détails du HSU' href='".base_url()."index.php/asu/view/".$host["id"]."' class='btn btn-default ' data-name='".$host["name"]."' data-id='".$host["id"]."' ><i class='glyphicon glyphicon-tasks' aria-hidden='true'></i></a>";
			  echo "<a alt='Statut' title='Statut radio' href='".base_url()."index.php/wireless/status/".$host["id"]."' class='btn btn-warning ' data-name='".$host["name"]."' data-id='".$host["id"]."' ><i class='fa fa-plug' aria-hidden='true'></i></a>";
			echo "<a alt='Edition' title='Edition du HSU' href='".base_url()."index.php/asu/edit?id=".$host["id"]."' class='btn btn-primary edit_btn' data-name='".$host["name"]."' data-id='".$host["id"]."' ><i class='fa fa-edit'></i></a>";
                        echo "<a alt='Redemarrage' title='Redemarrage du HSU' href='".base_url()."index.php/asu/reboot?ip=".long2ip($host["ipaddr"])."' class='btn btn-danger edit_btn' data-name='".$host["name"]."' data-id='".$host["id"]."' ><i class='glyphicon glyphicon-off'></i></a>";
                      
			if(false){
			 echo "<a alt='Suppression' title='Suppression du HSU' class='btn btn-danger del_btn' data-name='".$host["name"]."' data-id='".$host["id"]."' data-toggle='modal' data-target='#myDelete'><i class='glyphicon glyphicon-remove'></i></a>";
			}
			 echo "</td>";			 
			echo "</tr>";
		   }
		   }
            ?>
          </tbody>
        </table>
		</div>
      </div>
    </div>
  </div>



