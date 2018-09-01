<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <h3 class="col-lg-offset-4">Gestion des équipements de type inconnu</h3>
    </div>	
</div>

<div class="modal fade" id="myDeletebsu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">
                    Suppression de HBS
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
			<div id="deletebsuname"></div>
                Etes vous sur de vouloir supprimer ce HBS?
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Non</button>
                <a type="button" class="btn btn-danger conf_btn" data-hr="<?php echo base_url();?>index.php/bsu/delete/" href="<?php echo base_url();?>index.php/bsu/delete/"> Oui</a>
               
                
            </div>
        </div>
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
                    Suppression d'un équipement
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
			<div id="deletenodename"></div>
                Etes vous sur de supprimer cet equipement?
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Non</button>
                <a type="button" class="btn btn-danger conf_btn" data-hr="<?php echo base_url();?>index.php/asu/delete/" href="<?php echo base_url();?>index.php/asu/delete/"> Oui</a>
               
                
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <!--div class="x_title">
          <h2>Liste des équipements de type inconnu</h2>
        <ul class="nav navbar-right panel_toolbox">
          
          <li class="dropdown">
           <a href="<?php //echo base_url(); ?>index.php/bsu/create" class="btn btn-success">Ajouter HBS</a>
          </li>
		   <li class="dropdown">          
           <a href="<?php //echo base_url(); ?>index.php/asu/create" class="btn btn-success">Ajouter HSU</a>
          </li>
          
        </ul>
        <div class="clearfix"></div>
      </div-->
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
        <table data-toggle='table' data-show-columns='false' data-show-toggle='false' data-show-refresh='true'
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
			  <th>Réseau</th>
              <th data-sortable='true'>Adresse MAC</th>
              <th data-sortable='true'>Adresse IP</th>
              <!--th>Cartes</th-->
              <!--th>Topologie</th-->
              <th>Adresse</th>
			  <!--th>Intervalle</th-->
				<th>Latitude</th>
              <th>Longitude</th>
			   <!--th>Latitude locale</th>
              <th>Longitude locale</th-->
			   <!--th>Profile de statistique</th>
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
			/*echo "<td>".$host["serialno"]."</td>";
			echo "<td>";
			  foreach($types as $type){
				  if(trim($type["id"])==trim($host["deviceTypeId"])){ echo $type["name"]; break;}
			  } 
			echo "</td>";
			echo "<td>".$host["firmware"]."</td>";*/
						
			echo "<td>";
			foreach($networks as $network){
				if(trim($network["id"])==$host["networkId"]){ echo $network["name"]; break;}
			}
			echo "</td>";
			echo "<td>".$host["mac"]."</td>";
			 echo "<td>".long2ip($host["ipaddr"])."</td>";
			//echo "<td>".$host["map"]."</td>";
			//echo "<td>".$host["topology"]."</td>";
			echo "<td>".$host["location"]."</td>";
			//echo "<td>".$host["hbInterval"]."</td>";
			echo "<td>".$host["latitude"]."</td>";
			echo "<td>".$host["longitude"]."</td>";
			 //echo "<td>".$host["latitude_local"]."</td>";
			 
			 //echo "<td>".$host["longitude_local"]."</td>";
			

			/*echo "<td>";
			 foreach($stats as $stat){
			  if(trim($stat["id"])==trim($host["statsProfileId"])){ echo $stat["name"]; break;}
			} 
			
			echo "</td>";
			 echo "<td>";
			 foreach($alarms as $alarm){
			  if(trim($alarm["id"])== $host["alarmProfileId"]){ echo $alarm["name"]; break;}
			}
			 echo "</td>";*/
			 
			 if($host["isDown"]==1 || $host["isDown"]=='1'){
			  echo "<td><span class='btn btn-danger'><i class='fa fa-toggle-off' aria-hidden='true' title='Injoignable'></i></span></td>";
			  } else {
			  echo "<td><span class='btn btn-success'><i class='fa fa-toggle-on' aria-hidden='true' title='En ligne'></i></span></td>";
			  }
			  
			  /*
			 if($host["registered"]==1 || $host["registered"]=='1'){
			  echo "<td>oui</td>";
			  } else {
				  echo "<td>Non</td>";
			  }*/
			  
			 echo "<td>";
			 if($host["deviceTypeId"]==BSU_ID){
			 echo "<a alt='Edition' title='Edition du HBS' href='".base_url()."index.php/bsu/edit?id=".$host["id"]."' class='btn btn-primary edit_btn' data-name='".$host["name"]."' data-id='".$host["id"]."' ><i class='fa fa-edit'></i></a>";
			  echo "<a alt='Suppression' title='Suppression du HBS' class='btn btn-danger del_btnbsu' data-name='".$host["name"]."' data-id='".$host["id"]."' data-toggle='modal' data-target='#myDeletebsu'><i class='glyphicon glyphicon-remove'></i></a>";
			 } else if($host["deviceTypeId"]==ASU_ID){
				 echo "<a alt='Edition' title='Edition du HSU' href='".base_url()."index.php/asu/edit?id=".$host["id"]."' class='btn btn-primary edit_btn' data-name='".$host["name"]."' data-id='".$host["id"]."' ><i class='fa fa-edit'></i></a>";
				 echo "<a alt='Suppression' title='Suppression du HSU' class='btn btn-danger del_btn' data-name='".$host["name"]."' data-id='".$host["id"]."' data-toggle='modal' data-target='#myDelete'><i class='glyphicon glyphicon-remove'></i></a>";
			 }	else {
				 echo "<a alt='Edition BSU' title='Edition en HBS' href='".base_url()."index.php/bsu/edit?id=".$host["id"]."&changebsu=1' class='btn btn-primary edit_btn' data-name='".$host["name"]."' data-id='".$host["id"]."' > -->HBS<i class='fa fa-signal' aria-hidden='true'></i></a>";
			 	 echo "<a alt='Edition' title='Edition en HSU' href='".base_url()."index.php/asu/edit?id=".$host["id"]."&changeasu=1' class='btn btn-primary edit_btn' data-name='".$host["name"]."' data-id='".$host["id"]."' > -->HSU<i class='fa fa-wifi'  aria-hidden='true'></i></a>";
				 
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
</div>


