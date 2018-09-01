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
                    Annulation de demande
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                Etes vous sur d'annuler cette demande ?
                
              
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> Non</button>
                <a type="button" class="btn btn-danger conf_btn" href="<?php echo base_url();?>index.php/subscriber/cancel_sub/"> Oui</a>
               
                
            </div>
        </div>
    </div>
</div>

<div class="x_panel">
    <div class="x_panel">
   
        <div class="x_title">
            <h2>TATOO BRAS<small>Service PPPoE</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <span id="info_conf"></span>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="x_content">
       
         
          <form id="demo-form2" method="POST" action="<?php echo base_url();?>index.php/bras/save_conf" data-parsley-validate class="form-horizontal form-label-left">
            <div class="form-group">
              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Interface PPPoE</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" name="interface" id="interface">
                      
                      <?php if(isset($interface)) echo $interface;?>
                  </select>
              </div>
            </div>
            <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nombre d'utilisateurs</label>
                <div class="col-md-2 col-sm-2 col-xs-12">
                  <select class="form-control" name="user_number" id="user_number" >
                      
                      <?php 
                        for($i=0;$i<256;$i++){
                          if($user_number == $i){
                              echo "<option value='$i' selected>$i</option>";
                              
                          }else{
                              echo "<option value='$i'>$i</option>";
                              
                          }
                        }
                      ?>
                  </select>
                </div>
                <label for="middle-name" class="control-label col-md-2 col-sm-2 col-xs-12">Connexions simultanées</label>
                <div class="col-md-2 col-sm-2 col-xs-12">
                  <select class="form-control" name="user_session" id="user_session">
                      
                       <?php 
                        for($i=0;$i<256;$i++){
                          if($user_session == $i){
                              echo "<option value='$i' selected>$i</option>";
                              
                          }else{
                              echo "<option value='$i'>$i</option>";
                              
                          }
                        }
                      ?>
                  </select>
                </div>
            </div>
               
            <div class="form-group">
             
                
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Abonnés <br/> IP / DNS 1 /DNS2 <span class="required">*</span>
              </label>
              <div class="col-md-3 col-sm-3 col-xs-12">
                  <input type="text" id="user_gw" placeholder="Passerelle par défaut" name="user_gw" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($user_gw)) echo $user_gw;?>">
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12">
                  <input type="text" id="user_dns_1" placeholder="DNS primaire" name="user_dns_1" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($user_dns_1)) echo $user_dns_1;?>">
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12">
                  <input type="text" id="user_dns_2" placeholder="DNS secondaire" name="user_dns_2" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($user_dns_2)) echo $user_dns_2;?>">
              </div>
            </div>
           
           
            <hr>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Adresse IP du NAS <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nas_ip" name="nas_ip" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($nas_ip)) echo $nas_ip;?>">
              </div>
            </div>
            <hr>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Serveur RADIUS primaire <br/> IP / Port Auth / Port Acct <span class="required">*</span>
              </label>
              <div class="col-md-3 col-sm-3 col-xs-12">
                  <input type="text" id="radius_ip_1" name="radius_ip_1" placeholder="Adresse IP" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($radius_ip_1)) echo $radius_ip_1;?>">
              </div>
               <div class="col-md-3 col-sm-3 col-xs-12">
                   <input type="text" id="radius_auth_1" name="radius_auth_1" placeholder="Port d'authentification" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($radius_auth_1)) echo $radius_auth_1;?>">
              </div>
               <div class="col-md-3 col-sm-3 col-xs-12">
                  <input type="text" id="radius_acct_1" name="radius_acct_1" placeholder="Port d'accounting" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($radius_acct_1)) echo $radius_acct_1;?>">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Secret partagé du serveur RADIUS primaire<span class="required">*</span>
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                  <input type="text" id="radius_sec_1" name="radius_sec_1" placeholder="Entrez le secret partagé" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($radius_sec_1)) echo $radius_sec_1;?>">
              </div>
              
                
            </div>
            <hr>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pool IP sur le BRAS / masque <span class="required">*</span>
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                  <input type="text" id="pool_ip" name="pool_ip" placeholder="Pool IP sur le BRAS" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($pool_ip)) echo $pool_ip;?>">
              </div>
               <div class="col-md-2 col-sm-2 col-xs-12">
                  <input type="text" id="pool_mask" name="pool_mask" placeholder="Masque" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($pool_mask)) echo $pool_mask;?>">
              </div>     
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">IP WAN / masque <span class="required">*</span>
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                  <input type="text" id="wan_ip" name="wan_ip" placeholder="IP du port WAN" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($wan_ip)) echo $wan_ip;?>">
              </div>
               <div class="col-md-2 col-sm-2 col-xs-12">
                  <input type="text" id="wan_mask" name="wan_mask" placeholder="Masque" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($wan_mask)) echo $wan_mask;?>">
              </div>    
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gateway <span class="required">*</span>
              </label>
              <div class="col-md-4 col-sm-4 col-xs-12">
                  <input type="text" id="gateway_ip" name="gateway_ip" placeholder="IP du port WAN" required="required" class="form-control col-md-7 col-xs-12" value="<?php if(isset($gateway_ip)) echo $gateway_ip;?>">
              </div>
                 
            </div>
            
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <a type="submit" href="" class="btn btn-primary">Annuler</a>
                <input type="submit" value="Enregistrer" class="btn btn-success"/>
              </div>
            </div>

        </form>

        
    </div>
        


</div>