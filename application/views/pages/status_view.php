<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <h3 class="col-lg-offset-5">Informations radio </h3>
    </div>
   
	
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <div class="x_panel">
            <div class="x_title">
                <h2>Statuts Radio <small><?php if(isset($host)) echo $host;?></small> </h2>
               
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table">
                    <thead>
                      <tr>
                        
                        <th>Paramètres</th>
                        <th>Valeurs</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($status)) echo $status;?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </div>
   
</div>