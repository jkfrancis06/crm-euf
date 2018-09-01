  <!-- footer content -->
        <footer>
          <div class="pull-right">
            AMALYS TNS V1
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>

    </div>
  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

  <!-- gauge js -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/gauge/gauge.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/gauge/gauge_demo.js"></script>
  <!-- bootstrap progress js -->
  <script src="<?php echo base_url()?>assets/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="<?php echo base_url()?>assets/js/icheck/icheck.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/datepicker/daterangepicker.js"></script>
  <!-- chart js -->
  <script src="<?php echo base_url()?>assets/js/chartjs/chart.min.js"></script>

  <script src="<?php echo base_url()?>assets/js/custom.js"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/flot/jquery.flot.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/flot/jquery.flot.orderBars.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/flot/date.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/flot/jquery.flot.spline.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/flot/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/flot/curvedLines.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/flot/jquery.flot.resize.js"></script>
   <!-- echart -->
  <script src="<?php echo base_url()?>assets/js/echart/echarts-all.js"></script>
  <script src="<?php echo base_url()?>assets/js/echart/green.js"></script>
  
  <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
  


  <!-- worldmap -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/maps/jquery-jvectormap-2.0.3.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/maps/gdp-data.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/maps/jquery-jvectormap-world-mill-en.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/maps/jquery-jvectormap-us-aea-en.js"></script>
  <!-- Datatables-->
    <script src="<?php echo base_url()?>assets/js/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatables/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatables/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatables/jszip.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatables/pdfmake.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatables/vfs_fonts.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatables/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatables/buttons.print.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatables/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatables/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatables/responsive.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/datatables/dataTables.scroller.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <!-- pace -->
  <script src="<?php echo base_url()?>assets/js/pace/pace.min.js"></script>
  <!-- select2 -->
  <script src="<?php echo base_url()?>assets/js/select/select2.full.js"></script>
  <script src="<?php echo base_url()?>assets/js/pace/pace.min.js"></script>
  <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>-->
  <script>
    $("input").prop("enable", true);
    $.validate({
      modules : 'location, date, security, file, toggleDisabled',
      lang: 'fr',
      form : '#demo-form2'
    });
    $.
  </script>
   <?php
    if(isset($js)){
        foreach($js as  $script){?>
            <script type="text/javascript" src="<?php echo base_url()."assets/".$script;?>"></script>
        <?php
        }
    }

    if(isset($inlineJS)){

        ?>
        <script>  <?php echo $inlineJS; ?> </script>
    <?php
    }
    ?>

  <script>
    $(document).ready(function() {
       // alert("ok");
      $(".select2_single").select2({
        placeholder: "Select a state",
        allowClear: true
      });
      $(".select2_group").select2({});
      $(".select2_multiple").select2({
        maximumSelectionLength: 10,
        placeholder: "Veuiller selectionner des modules",
        allowClear: true
      });
    });
  </script>
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            var NewHeight = $(document).height() -3100;
            var wHeight = $('#pT').height()/ 3;
            
            //alert("Pt"+wHeight);
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable({
                    "language": {
                            "lengthMenu": " _MENU_  par page",
                            "zeroRecords": "Aucune donnée - désolé",
                            "info": "Affichage de la page _PAGE_ / _PAGES_",
                            "infoEmpty": "Aucun enregistrement disponible",
                            "infoFiltered": "(filtré de _MAX_ total enregistrements)",
                            "search": "Recherche ",
                            "paginate": {
                                    "first":      "Premier",
                                    "last":       "Dernier",
                                    "next":       "Suivant",
                                    "previous":   "Précédent"
                            },
                    },
                    "order": [[3, "desc" ]]
            });
            
            $('#datatable-responsive-plan').DataTable({
                    "language": {
                            "lengthMenu": " _MENU_ par page",
                            "zeroRecords": "Aucune installation n'est prévue pour aujourd'hui",
                            "info": "Affichage de la page _PAGE_ / _PAGES_",
                            "infoEmpty": "Aucun enregistrement disponible",
                            "infoFiltered": "(filtré de _MAX_ total enregistrements)",
                            "search": "Recherche ",
                            "paginate": {
                                    "first":      "Premier",
                                    "last":       "Dernier",
                                    "next":       "Suivant",
                                    "previous":   "Précédent"
                            },
                    },
                    "order": [[1, "asc" ]]
            });
			$('#journal-alert').DataTable({
				"language": {
					"lengthMenu": "Affichage de _MENU_ enregistrements par page",
					"zeroRecords": "Aucune donnée - désolé",
					"info": "Affichage de la page _PAGE_ / _PAGES_",
					"infoEmpty": "Aucun enregistrement disponible",
					"infoFiltered": "(filtré de _MAX_ total enregistrements)",
					"search": "Recherche:",
					"paginate": {
						"first":      "Premier",
						"last":       "Dernier",
						"next":       "Suivant",
						"previous":   "Précédent"
					},
				},
				"order": [[3, "desc" ]]
			});
                        $('#datatable-abonne').DataTable({
                               
				"language": {
					"lengthMenu": "_MENU_  par page",
					"zeroRecords": "Aucune donnée - désolé",
					"info": "Affichage de la page _PAGE_ / _PAGES_",
					"infoEmpty": "Aucun enregistrement disponible",
					"infoFiltered": "(filtré de _MAX_ total enregistrements)",
					"search": "Recherche ",
					"paginate": {
						"first":      "Premier",
						"last":       "Dernier",
						"next":       "Suivant",
						"previous":   "Précédent"
					},
				},
				order: [[0, "desc" ]],
                                
                                
			});
                        $('#datatable-radius').DataTable({
                               
				"language": {
					"lengthMenu": "_MENU_  par page",
					"zeroRecords": "Aucune donnée - désolé",
					"info": "Affichage de la page _PAGE_ / _PAGES_",
					"infoEmpty": "Aucun enregistrement disponible",
					"infoFiltered": "(filtré de _MAX_ total enregistrements)",
					"search": " ",
					"paginate": {
						"first":      "Premier",
						"last":       "Dernier",
						"next":       "Suivant",
						"previous":   "Précédent"
					},
				},
				order: [[0, "desc" ]],
                                
                                
			});
                        $('#datatable-sel').DataTable({
                               
				"language": {
					"lengthMenu": " _MENU_ ",
					"zeroRecords": "Aucune donnée - désolé",
					"info": "Affichage de la page _PAGE_ / _PAGES_",
					"infoEmpty": "Aucun enregistrement disponible",
					"infoFiltered": "(filtré de _MAX_ total enregistrements)",
					"search": "",
					"paginate": {
						"first":      "Premier",
						"last":       "Dernier",
						"next":       "Suivant",
						"previous":   "Précédent"
					},
				},
				order: [[0, "asc" ]],
                                
			});
                        $('#datatable-nsel').DataTable({
                               
				"language": {
					"lengthMenu": " _MENU_ ",
					"zeroRecords": "Aucune donnée - désolé",
					"info": "Affichage de la page _PAGE_ / _PAGES_",
					"infoEmpty": "Aucun enregistrement disponible",
					"infoFiltered": "(filtré de _MAX_ total enregistrements)",
					"search": "",
					"paginate": {
						"first":      "Premier",
						"last":       "Dernier",
						"next":       "Suivant",
						"previous":   "Précédent"
					},
				},
				order: [[0, "asc" ]],
                                
			});
                         $('#datatable-pppoe').DataTable({
                               
				"language": {
					"lengthMenu": "Affichage de _MENU_ enregistrements par page",
					"zeroRecords": "Aucune donnée - désolé",
					"info": "Affichage de la page _PAGE_ / _PAGES_",
					"infoEmpty": "Aucun enregistrement disponible",
					"infoFiltered": "(filtré de _MAX_ total enregistrements)",
					"search": "",
					"paginate": {
						"first":      "Premier",
						"last":       "Dernier",
						"next":       "Suivant",
						"previous":   "Précédent"
					},
				},
				order: [[0, "desc" ]],
//                                scrollY: wHeight,
//                                scrollCollapse: true,
			});
                         $('#datatable-offre').DataTable({
				"language": {
					"lengthMenu": "Affichage de _MENU_ enregistrements par page",
					"zeroRecords": "Aucune donnée - désolé",
					"info": "Affichage de la page _PAGE_ / _PAGES_",
					"infoEmpty": "Aucun enregistrement disponible",
					"infoFiltered": "(filtré de _MAX_ total enregistrements)",
					"search": "Recherche:",
					"paginate": {
						"first":      "Premier",
						"last":       "Dernier",
						"next":       "Suivant",
						"previous":   "Précédent"
					},
				},
				order: [[0, "desc" ]],
                                scrollY: 80,
                                scrollCollapse: true,
			});
                        
                         $('#datatable-dia').DataTable({
				"language": {
					"lengthMenu": "Affichage de _MENU_ enregistrements par page",
					"zeroRecords": "Aucune donnée - désolé",
					"info": "Affichage de la page _PAGE_ / _PAGES_",
					"infoEmpty": "Aucun enregistrement disponible",
					"infoFiltered": "(filtré de _MAX_ total enregistrements)",
					"search": "Recherche:",
					"paginate": {
						"first":      "Premier",
						"last":       "Dernier",
						"next":       "Suivant",
						"previous":   "Précédent"
					},
				},
				order: [[0, "asc" ]],
                                "columns": [
                                   
                                   { "width": "30%" },
                                   { "width": "50%" },
                                    null,
                                    
                                
                                ]
                                //scrollY: 80,
                                //scrollCollapse: true,
			});
                        
                        $('#bs-state').DataTable({
				"language": {
					"lengthMenu": " _MENU_ ",
					"zeroRecords": "Aucune donnée - désolé",
					"info": "Affichage de la page _PAGE_ / _PAGES_",
					"infoEmpty": "Aucun enregistrement disponible",
					"infoFiltered": "(filtré de _MAX_ total enregistrements)",
					"search": "",
					"paginate": {
						"first":      "Premier",
						"last":       "Dernier",
						"next":       "Suivant",
						"previous":   "Précédent"
					},
				},
				"order": [[1, "desc" ]],
                                "search": false,
                                
			});
                        
                        
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>
  
  <!-- skycons -->
  <script src="<?php echo base_url()?>assets/js/skycons/skycons.min.js"></script>
  <script>
    var icons = new Skycons({
        "color": "#73879C"
      }),
      list = [
        "clear-day", "clear-night", "partly-cloudy-day",
        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
        "fog"
      ],
      i;

    for (i = list.length; i--;)
      icons.set(list[i], list[i]);

    icons.play();
  </script>

  
  <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  
  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>
