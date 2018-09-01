console.info("here");
$(document).ready(function() {
	console.info("here");
	 $("#date_cre").datepicker({format: "dd-mm-yyyy",language: "fr",autoclose: "true"});
	 $("#date_ins").datepicker({format: "dd-mm-yyyy",language: "fr",autoclose: "true"});
	  $("#eddate_cre").datepicker({format: "dd-mm-yyyy",language: "fr",autoclose: "true"});
	 $("#eddate_ins").datepicker({format: "dd-mm-yyyy",language: "fr",autoclose: "true"});
	//// console.info("here1");
    $(".del_btn").click(function(event) {
       // alert("As you can see, the link no longer took you to jquery.com");
        var id = $(this).attr('data-id');
        var reference  = $(".conf_btn").attr('data-hr');
        reference+=""+id;
		$("#deletenodename").html($(this).attr('data-name'));
      // console.info(reference);
        $(".conf_btn").attr('href',reference);
        //event.preventDefault();
    });
   //// console.info("here0");
    $(".edit_btn").click(function(event) {
       // alert("As you can see, the link no longer took you to jquery.com");
        var id = $(this).attr('data-id');
       // var reference  = $(".ed_conf_btn").attr('href');
        var attribut = ".nom"+id;
        //var nom = $(".nom"+id).text()+" "+$(".prenom"+id).text();
        alert($("#titre").val());
		index=$(".edit_btn").index($(this));
		row=$("#example_1").find("tr").eq(index);
		
		$("#edid").val(row.find("td").eq(0).html());
		$("#ednom").val(row.find("td").eq(1).html());
		$("#edlatitude").val(row.find("td").eq(2).html());
		$("#edlongitude").val(row.find("td").eq(3).html());
		$("#edadrip").val(row.find("td").eq(4).html());
		$("#eddescription").val(row.find("td").eq(5).html());
		$("#edquartier").val(row.find("td").eq(6).html());
    });
	
	console.info("hereb");
   $('#example_1').on('page-change.bs.table', function (e, row, $element) {
   //// console.info("herein0");          
	$(".del_btn").click(function(event) {
       // alert("As you can see, the link no longer took you to jquery.com");
        var id = $(this).attr('data-id');
        var reference  = $(".conf_btn").attr('data-hr');
        reference+=""+id;
		$("#deletenodename").html($(this).attr('data-name'));
     // // console.info(reference);
	   $(".conf_btn").attr('href',reference);
        //event.preventDefault();
    });
  // //// console.info("herein1");
    $(".edit_btn").click(function(event) {
       // alert("As you can see, the link no longer took you to jquery.com");
        var id = $(this).attr('data-id');
       // var reference  = $(".ed_conf_btn").attr('href');
        var attribut = ".nom"+id;
        //var nom = $(".nom"+id).text()+" "+$(".prenom"+id).text();
        alert($("#titre").val());
		index=$(".edit_btn").index($(this));
		row=$("#example_1").find("tr").eq(index);
		
		$("#edid").val(row.find("td").eq(0).html());
		$("#ednom").val(row.find("td").eq(1).html());
		$("#edlatitude").val(row.find("td").eq(2).html());
		$("#edlongitude").val(row.find("td").eq(3).html());
		$("#edadrip").val(row.find("td").eq(4).html());
		$("#eddescription").val(row.find("td").eq(5).html());
		$("#edquartier").val(row.find("td").eq(6).html());
    });

   
   });
   
    $('#example_1').on('post-body.bs.table', function (e, row, $element) {
   //// console.info("herein0");          
	$(".del_btn").click(function(event) {
       // alert("As you can see, the link no longer took you to jquery.com");
        var id = $(this).attr('data-id');
        var reference  = $(".conf_btn").attr('data-hr');
        reference+=""+id;
		$("#deletenodename").html($(this).attr('data-name'));
      ////// console.info(reference);
	   $(".conf_btn").attr('href',reference);
        //event.preventDefault();
    });
   //// console.info("herein1");
    $(".edit_btn").click(function(event) {
       // alert("As you can see, the link no longer took you to jquery.com");
        var id = $(this).attr('data-id');
       // var reference  = $(".ed_conf_btn").attr('href');
        var attribut = ".nom"+id;
        //var nom = $(".nom"+id).text()+" "+$(".prenom"+id).text();
       // alert($("#titre").val());
		index=$(".edit_btn").index($(this));
		row=$("#example_1").find("tr").eq(index);
		
		$("#edid").val(row.find("td").eq(0).html());
		$("#ednom").val(row.find("td").eq(1).html());
		$("#edlatitude").val(row.find("td").eq(2).html());
		$("#edlongitude").val(row.find("td").eq(3).html());
		$("#edadrip").val(row.find("td").eq(4).html());
		$("#eddescription").val(row.find("td").eq(5).html());
		$("#edquartier").val(row.find("td").eq(6).html());
    });

   
   });
});

