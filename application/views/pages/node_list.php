
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    Ajout d'un node
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/node/create" method="POST">
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="nom">Nom</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nom" placeholder="nom" name="nom" id="nom"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"for="latitude" >Latitude</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" placeholder="latitude" name="latitude" id="latitude"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="longitude" >Longitude</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control"  placeholder="longitude" name="longitude" id="longitude"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="adrip">Adresse IP</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="192.168.1.1" name="adrip" id="adrip"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="description">Description</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="description" placeholder="description" name="description" id="description"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="quartier">Quartier</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="quartier" placeholder="quartier" name="quartier" id="quartier"/>
                    </div>
                  </div>
				  <div class="form-group has-feedback">
                          <label class="col-sm-4 control-label" for="date_ins">Date d'installation</label>
						   <div class="col-sm-8">
						  <div class="input-group date">
                          <input name="date_ins" value="" required="true" min-length="8" id="date_ins" type="text" class="form-control" placeholder=""/>
						  <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
						  </div>
						  </div>
                    </div>
					<!--div class="form-group has-feedback">
                          <label class="col-sm-4 control-label" for="date_cre">Date de création</label>
						   <div class="col-sm-8">
						  <div class="input-group date">
                          <input name="date_cre" value="" required="true" min-length="8" id="date_cre" type="text" class="form-control" placeholder=""/>
						  <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
						  </div>
						  </div>
                    </div-->
                  
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Fermer</button>
                <input type="submit" value="Enregister" class="btn btn-primary"/>
               
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    Edition d'un node
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/node/edit" method="POST">
                  <input type="hidden" class="form-control"  name="id" id="edid"/>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="nom">Nom</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="ednom" placeholder="nom" name="nom" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"for="latitude" >Latitude</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" placeholder="latitude" name="latitude" id="edlatitude"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="longitude" >Longitude</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control"  placeholder="longitude" name="longitude" id="edlongitude"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="adrip">Adresse IP</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control"  placeholder="192.168.1.1" name="adrip" id="edadrip"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="description">Description</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="description" name="description" id="eddescription"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="quartier">Quartier</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="quartier" name="quartier" id="edquartier"/>
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                          <label class="col-sm-4 control-label" for="date_ins">Date d'installation</label>
						   <div class="col-sm-8">
						  <div class="input-group date">
                          <input name="date_ins" value="" required="true" min-length="8" id="eddate_ins" type="text" class="form-control" placeholder=""/>
						  <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
						  </div>
						  </div>
                    </div>
					<!--div class="form-group has-feedback">
                          <label class="col-sm-4 control-label" for="date_cre">Date de création</label>
						   <div class="col-sm-8">
						  <div class="input-group date">
                          <input name="date_cre" value="" required="true" min-length="8" id="eddate_cre" type="text" class="form-control" placeholder=""/>
						  <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
						  </div>
						  </div>
                    </div--> 
               
              
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Fermer</button>
                <input type="submit" value="Enregister" class="btn btn-primary ed_conf_btn"/>
               
                </form>
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
                    Suppression d'un node
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
			  <div id="deletenodename"></div>
                Etes vous sur de supprimer cet node ?
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Non</button>
                <a type="button" class="btn btn-danger conf_btn" data-hr="<?php echo base_url();?>index.php/node/delete/" href="<?php echo base_url();?>index.php/node/delete/"> Oui</a>
               
                
            </div>
        </div>
    </div>
</div>

    <div class="x_panel">
      <div class="x_title">
          <h2>Liste des nodes</h2>
        <ul class="nav navbar-right panel_toolbox">
          
          <li class="dropdown">
		  <a href="<?php echo base_url(); ?>index.php/node/create" class="btn btn-success">Ajouter</a>
           <!--button class="btn btn-success" data-toggle="modal" data-target="#myModalHorizontal">Ajouter</button!-->
          </li>
          
        </ul>
        <div class="clearfix"></div>
      </div>
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
        <table 
		data-toggle='table' data-show-columns='false' data-show-toggle='false' data-show-refresh='true'
                       data-local='fr_FR' data-height='' data-striped='true' data-pagination='true' data-page-size='10'
                        data-page-list='[5, 10, 20, 50, 100, 200]' data-search='true' id='example_1'
		<?php /*id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" */?>
		>
          <thead>
            <tr>
			  <th data-field='c_id' data-visible='false' data-sortable='true'>id</th> 
              <th>Nom</th>
              <th>Latitude</th>
              <th>Longitude</th>
              <th>Adresse IP</th>
			  <th>Description</th>
			  <th>Quartier</th>
			  <th>Index</th>
              <th>Date d'installation</th>
              <th>Actions</th>
              
            </tr>
          </thead>
          <tbody>
           <?php if($nodes!=null && count($nodes)>0){
			  
			   foreach($nodes as $node){
				   // var_dump($node); echo"<br/>";
			echo "<tr>";	   
			echo "<td>".$node["c_id"]."</td>";
			echo "<td>".$node["c_nom"]."</td>";	
			echo "<td>".$node["c_latitude"]."</td>";
			echo "<td>".$node["c_longitude"]."</td>";
			echo "<td>".$node["c_ip"]."</td>";
			echo "<td>".$node["c_description"]."</td>";
			echo "<td>".$node["c_quartier"]."</td>";
			echo "<td>".$node["c_code"]."</td>";//$node["c_index"]
			echo "<td>".getFrenchDateFromEnglishDate($node["c_date_ins"])."</td>";
			// echo "<td>".getFrenchDateFromEnglishDate($node["c_date_cre"])."</td>";
			echo "<td>";
			//echo "<button class='btn btn-primary edit_btn' data-name='".$node["c_nom"]."' data-id='".$node["c_id"]."' data-toggle='modal' data-target='#myUpdate'><i class='fa fa-edit'></i></button>";
			//echo "<a class='btn btn-danger del_btn' data-name='".$node["c_nom"]."' data-id='".$node["c_id"]."' data-toggle='modal' data-target='#myDelete'><i class='fa fa-power-off'></i></a>";
			echo "<a alt='BSU' title='Liste des BSU' href='".base_url()."index.php/bsu/getfornode?node=".$node["c_id"]."' class='btn btn-info' data-name='".$node["c_nom"]."' data-id='".$node["c_id"]."' data-toggle0='modal' data-target0='#myUpdate'><i class='glyphicon glyphicon-list'></i></a>";
			echo "<a alt='Edition' title='Edition du node' href='".base_url()."index.php/node/edit?id=".$node["c_id"]."' class='btn btn-primary edit_btn0' data-name='".$node["c_nom"]."' data-id='".$node["c_id"]."' data-toggle0='modal' data-target0='#myUpdate'><i class='fa fa-edit'></i></a>";
			echo "<a alt='Suppression' title='Suppression du node' class='btn btn-danger del_btn' data-name='".$node["c_nom"]."' data-id='".$node["c_id"]."' data-toggle='modal' data-target='#myDelete'><i class='glyphicon glyphicon-remove'></i></a>";

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



