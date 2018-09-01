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
<div class="col-md-12 col-sm-12 col-xs-12 ">

    <h3>Journal des alertes</h3>
	
</div>

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
                    Ajout d'un utilisateur
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form class="form-horizontal" role="form" action="<?php echo base_url()?>index.php/admin/addUser" method="POST">
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="inputEmail3">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="login" id="login"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"for="inputPassword3" >Mot de passe</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" placeholder="Password" name="mdp" id="mdp"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="inputPassword3" >Confirmation mot de passe</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control"  placeholder="Password" name="cdmp" id="cmdp"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="inputEmail3">Nom</label>
                    <div class="col-sm-8">
                        <input type="name" class="form-control"  placeholder="Nom" name="nom" id="nom"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="inputEmail3">Prenoms</label>
                    <div class="col-sm-8">
                        <input type="name" class="form-control" id="inputEmail3" placeholder="Prenoms" name="prenom" id="prenom"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="inputEmail3">Telephone</label>
                    <div class="col-sm-8">
                        <input type="phone" class="form-control" id="inputEmail3" placeholder="Numero de telephone" name="tel" id="tel"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="inputEmail3">Profil</label>
                    <div class="col-sm-8"> 
                        <select class="form-control" name="id_pro" id="id_pro">
                            <option value="1">Administrateur</option>
                        </select>
<!--                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email"/>-->
                    </div>
                  </div>
                   
               
              
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
                    Edition d'un utilisateur
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form class="form-horizontal" role="form" action="<?php echo base_url()?>index.php/admin/editAllUser" method="POST">
                 
				  <div class="form-group">
                    <!-- <label  class="col-sm-4 control-label" for="inputEmail3">ID</label> -->
                    <div class="col-sm-8">
                        <input type="hidden" class="form-control"  placeholder="Nom" name="id_titre" id="id_titre" value=""/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="inputEmail3">Nom</label>
                    <div class="col-sm-8">
                        <input type="name" class="form-control"  placeholder="Nom" name="nom_titre" id="nom_titre" value=""/>
                    </div>
                  </div>
				  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="inputEmail3">Prenoms</label>
                    <div class="col-sm-8">
                        <input type="name" class="form-control"  placeholder="Prenom" name="prenom_titre" id="prenom_titre" value=""/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="inputEmail3">Profil</label>
                    <div class="col-sm-8"> 
                        <select class="form-control" name="id_pro" id="id_pro">
                            <option value="1">Administrateur</option>
                        </select>
<!--                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email"/>-->
                    </div>
                  </div>
				  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="inputEmail3"></label>
                    <input type="checkbox" name="init_pwd" value="1" > Reinitialiser mot de passe
                  </div>
                   
               
              
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
          <h2>Alarmes active<small></small></h2>
        <ul class="nav navbar-right panel_toolbox">
          
          <li class="dropdown">
           <!--<button class="btn btn-success" data-toggle="modal" data-target="#myModalHorizontal">Ajouter</button>-->
          </li>
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        
        <table id="journal-alert" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr class="btn-success">
              <th>Equipements</th>
              <th>Type d'alerte</th>
              <th>Message d'alerte</th>
              <th>Date et heure</th>
			  <th>Statut</th>

            </tr>
          </thead>
          <tbody>
            <?php if(isset($alarms)) echo $alarms?>
            
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>


