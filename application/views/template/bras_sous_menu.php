

<div class="x_panel">
   
    <div class="x_title">
        <a class="btn  <?php if($active == 'active_session') echo "btn-primary"; else echo "btn-default";?>" href="<?php echo base_url();?>index.php/Bras/">Sessions Actives</a>
        <a class="btn <?php if($active == 'pppoe_service') echo "btn-primary"; else echo "btn-default";?>" href="<?php echo base_url();?>index.php/Bras/config">Service PPPoE</a>
        <a class="btn <?php if($active == 'bras_reboot') echo "btn-primary"; else echo "btn-default";?>" href="<?php echo base_url();?>index.php/Bras/reboot">Redemarrer le BRAS</a>

        <ul class="nav navbar-right panel_toolbox">
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
