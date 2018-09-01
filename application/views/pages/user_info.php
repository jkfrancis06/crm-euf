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


    <div class="x_panel">
        <h5>Informations client</h5>
        <table id="" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead></thead>
            <tbody><?php if(isset($clientState)) echo $clientState;?></tbody>
        </table>
    </div>
    <div class="x_panel">
        <h5 class="">Informations sur la SU</h5>
         <table id="" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              
              <th>Parametres</th>
              <th>Valeurs</th>
             
              
            </tr>
          </thead>
          <tbody>
            <?php if(isset($deviceState)) echo $deviceState?>
            
          </tbody>
        </table>

    </div>
   
    

    
    <div class="x_panel">
        <h5 class="">Informations de connexion du modem client</h5>
        <table id="datatable-radius" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Debut de session</th>
              <th>Fin de session</th>
              <th>Volume envoyé</th>
              <th>Volume reçu</th>
              <th>Adresse obtenu</th>
             
              
              
            </tr>
          </thead>
          <tbody>
            <?php if(isset($modemState)) echo $modemState;?>
            
          </tbody>
        </table>

    </div>
    
    <div class="x_panel">
        <h5 class="">Informations sur les offres souscrits</h5>
        <table id="datatable-offre" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Identifiant</th>
              <th>Offre BLR</th>
              <th>Statut de l'offre</th>
              <th>Debut de souscription</th>
              <th>Fin de souscription</th>
              <th>Exipration</th>
             
            </tr>
          </thead>
          <tbody>
            <?php if(isset($pcrfState)) echo $pcrfState;?>
            
          </tbody>
        </table>
    </div>
   
	

