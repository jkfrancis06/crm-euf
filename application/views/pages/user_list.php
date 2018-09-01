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
                    Ajout d'un utilisateur form
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="demo-form2" method="POST" action="<?php echo base_url();?>index.php/admin/addUser" 
                     
                      data-parsley-validate class="form-horizontal form-label-left">
<!--                <form class="form-horizontal" role="form" id="addP" furl="" method="POST">-->
<!--                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="inputEmail3">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="login" placeholder="Email" required="required" name="login" id="login" data-validation="email"/>
                    </div>
                    
                  </div>-->
                  <div class="form-group">
                    <label class="col-sm-4 control-label"for="inputEmail3" >Adresse mail</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="email" 
                               required="required" name="login" id="mail" data-validation="email server" 
                               data-validation-url="<?php if(isset($mail)) echo $mail;?>" />
                    </div>
                  </div>
              
                  <div class="form-group">
                    <label class="col-sm-4 control-label"for="inputPassword3" >Mot de passe</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" placeholder="Password" required="required" name="mdp" id="mdp_id" data-validation="length" data-validation-length="min6"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label"
                          for="inputPassword3" >Confirmation mot de passe</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control"  placeholder="Password" name="cdmp" required="required" id="cmdp_id" data-validation="confirmation" data-validation-confirm="mdp"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="inputEmail3">Nom</label>
                    <div class="col-sm-7">
                        <input type="name" class="form-control"  placeholder="Nom" name="nom" required="required" id="nom"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="inputEmail3">Prenoms</label>
                    <div class="col-sm-7">
                        <input type="name" class="form-control"  placeholder="Prenoms" name="prenom" id="p_id" required="required"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="inputEmail3">Telephone</label>
                    <div class="col-sm-7">
                        <input type="phone" class="form-control" placeholder="Numero de telephone"
                               name="tel" id="p_tel" required="required" data-validation="length number server"
                               data-validation-url="<?php if(isset($tel)) echo $tel;?>"
                               data-validation-length="min7"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label  class="col-sm-4 control-label" for="inputEmail3">Profil</label>
                    <div class="col-sm-7"> 
                       <?php if(isset($profil)) echo $profil; ?>
<!--                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email"/>-->
                    </div>
                  </div>
                   
               
              
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Fermer</button>
                <input type="submit" id="btn-reg" value="Enregister" class="btn btn-primary"/>
               
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
                        <?php if(isset($profil)) echo $profil; ?>
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
<div class="modal fade" id="myLoad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div id="load_inf">
                    <p style="text-align: center"> Chargement en cours</p>
                    <p style="text-align: center" id="loader" style="display: inline;"> <img src="<?php echo base_url()?>assets/ajload.gif" alt="loading" /></p>
                    
                </div>
               
                
              
            </div>
            
           
        </div>
    </div>
</div>
<div class="modal fade" id="myActivate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    Activation d'un utilisateur
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                Etes vous sur  d'activer cet utilisateur ?
                
              
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Non</button>
                <a type="button" class="btn btn-danger confact_btn" href="<?php echo base_url();?>index.php/admin/activateUser/"> Oui</a>
               
                
            </div>
        </div>
    </div>
</div>
<div class="page-title">

</div>
<div class="clearfix"></div>
<div class="row">
    
</div>
<div class="x_panel">
      <div class="x_title">
          <h2>Liste des utilisateurs<small>par ordre alphabetique</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          
          <li class="dropdown">
           <button class="btn btn-success" data-toggle="modal" data-target="#myModalHorizontal">Ajouter</button>
          </li>
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        
          <table class="table table-striped table-hover"
            data-toggle='table' data-show-columns='false' data-show-toggle='false' data-show-refresh='true'
                       data-local='fr_FR' data-height=''  data-pagination='true' data-page-size='10'
                        data-page-list='[5, 10, 20, 50, 100, 200]' data-search='true' id='utilisateur' 
                        data-url="<?php if(isset($user_url)) echo $user_url;?>">
          <thead>
            <tr>
              <th data-field="nom">Nom</th>
              <th data-field="prenom">Prénoms</th>
              
              <th data-field="profil">Profil</th>
              <th data-field="login">Adresse mail</th>
              <th data-field="action"></th>
            </tr>
          </thead>
          <tbody>
            <?php //echo $users?>
            
          </tbody>
        </table>

      </div>
    </div>
  </div>



