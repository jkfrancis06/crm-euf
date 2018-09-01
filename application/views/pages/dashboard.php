<?php ?>

<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Pie Area</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a href="#"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <div id="echart_pie2" style="height:350px;"></div>

      </div>
    </div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Pie Area</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div id="echart_pie2" style="height:350px;"></div>

                </div>
              </div>
            </div>
<div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Pie Area</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div id="echart_pie2" style="height:350px;"></div>
                  

                </div>
              </div>
            </div>
      

<!-- top tiles -->
<!--<div class="row tile_count">
  
  <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
    
    <div class="right">
        <span class="count_top"><i class="fa fa-clock-o"></i> HBS actives </span>
      <div class="count"><?php  echo $activ_bsu?></div>  
    </div>
  </div>
  <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
    <div class="left"></div>
    <div class="right">
      <span class="count_top"><i class="fa fa-asterisk"></i> HSU actifs</span>
      <div class="count green"><?php  echo $activ_hsu?></div>

    </div>
  </div>
  <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
    <div class="left"></div>
    <div class="right">
      <span class="count_top"><i class="fa fa-user"></i> Comptes connectés</span>
      <div class="count"><?php  echo $radius_state ; ?></div>

    </div>
  </div>
 
  

     <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
    <div class="left"></div>
    <div class="right">
        <span class="count_top"><i class="fa fa-street-view"></i> Survey en attente </span>
      <div class="count">04</div>  
    </div>
  </div>
  <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
    <div class="left"></div>
    <div class="right">
      <span class="count_top"><i class="fa fa-compress"></i> Installations en attente</span>
      <div class="count green">03</div>

    </div>
  </div>
  <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
    <div class="left"></div>
    <div class="right">
      <span class="count_top"><i class="fa fa-expand"></i>Interventions en attente</span>
      <div class="count">01</div>

    </div>
  </div>
</div>-->
<!-- /top tiles -->

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
          <h2>Charge des Stations de Bases<small></small></h2>
        <ul class="nav navbar-right panel_toolbox">
          
          <li class="dropdown">
           <!--<button class="btn btn-success" data-toggle="modal" data-target="#myModalHorizontal">Ajouter</button>-->
          </li>
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        
        <table id="bs-state" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr class="btn-success">
              <th>HBS</th>
              <th>Nombre de HSU</th>
              

            </tr>
          </thead>
          <tbody>
            <?php echo $bs_state;?>
            
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>
