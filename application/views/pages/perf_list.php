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
            <h2><?php if(isset($bs))echo $bs->name;?><small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <span id="info"></span>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <form action="" method="POST">
    <div class="x_content">
        <table data-toggle='table' data-show-columns='false' data-show-toggle='false'   data-show-refresh='true' data-local='fr_FR' data-height='' data-striped='true' data-pagination='true' data-page-size='10' data-page-list='[5, 10, 20, 50, 100, 200]' data-search='true'>
            <thead>
                <tr>
                  <th>Mode operationnel</th>
                  <th>Freq</th>
                  <th>Protocol</th>
                  <th>BitRate (Mb/s)</th>
                  <th>Gain</th>
                  <th>Largeur de bande</th>
                  <th>Mode radio</th>
                   <th>Puissance Tx</th>
                    <th>Bruit</th>
                  
                  <th>Canal</th>
                  <th>Country Code</th>
                  <th>Scenario</th>
             
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php if(isset($radio)) echo $radio->operationMode ;?></td>
                     <td><?php if(isset($radio)) echo $radio->dev->wifi0->frequency ;?></td>
                     <td><?php if(isset($radio)) echo $radio->dev->wifi0->protocol ;?></td>
                     <td><?php if(isset($radio)) echo $radio->dev->wifi0->bitrate ;?></td>
                     <td><?php if(isset($radio)) echo $radio->dev->wifi0->antennaGain ;?></td>
                     <td><?php if(isset($radio)) echo $radio->dev->wifi0->channelWidth ;?></td>
                     <td><?php if(isset($radio)) echo $radio->dev->wifi0->radioMode ;?></td>
                     <td><?php if(isset($radio)) echo $radio->dev->wifi0->txPower ;?></td>
                       <td><?php if(isset($radio)) echo $radio->dev->wifi0->noise ;?></td>
                       <td><?php if(isset($radio)) echo $radio->dev->wifi0->channel ;?></td>
                        <td><?php if(isset($radio)) echo $radio->countryCode ;?></td>
                            <td><?php if(isset($radio)) echo $radio->operationScenario ;?></td>
                   
                </tr>
                

            </tbody>
        </table>
        
        <table data-toggle='table' data-show-columns='false' data-show-toggle='false'  data-url="<?php if(isset($peers) ) echo $peers;?>" data-show-refresh='true' data-local='fr_FR' data-height='' data-striped='true' data-pagination='true' data-page-size='10' data-page-list='[5, 10, 20, 50, 100, 200]' data-search='true' id='session'>
            <thead>
                <tr>
                  <th data-field='deviceName'>SU#</th>
                  <th data-field='mac'>Adresse Mac</th>
                  <th data-field='ipAddress'>Adresse IP</th>
                  <th data-field='vap' data-sortable='true'>SSID</th>
                  <th data-field='signal' data-sortable='true'>Signal</th>
                  
                  <th data-field='rxDropPercent'>% Rx Drop</th>
                  <th data-field='txRetryPercent'>% Retransmission Tx</th>
                  <th data-field='txRate'>Debit Tx (Mb/s)</th>
                  <th data-field='rxRate'>Debit Rx (Mb/s)</th>
                  <th data-field='txPackets'>Paquets Tx</th>
                  <th data-field='rxPackets'>Paquets Rx</th>
                  <th data-field='rxCcqPercent'>% CCQ RX</th>
                  <th data-field='txCcqPercent'>% CCQ TX</th>
       
                  <th data-field='linkUptime'>Duree de transmission</th>
                  
                  
                  
                  


                </tr>
            </thead>
            <tbody>
                <?php if(isset($radius_state)) echo $radius_state;?>

            </tbody>
        </table>
      
    </div>
  

</div>
    </div>
</div>