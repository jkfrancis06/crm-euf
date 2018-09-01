
$(function () {
    $(".del").click(function(event){
        alert("yoyo");
    });
    $(".del_btn").click(function(event) {
      //  alert("As you can see, the link no longer took you to jquery.com");
        var id = $(this).attr('id');
       // alert(id);
        var reference  = $(".conf_btn").attr('href');
        reference+=""+id;
        //alert(reference);
        $(".conf_btn").attr('href',reference);
        //event.preventDefault();
    });
    $(".act_btn").click(function(event) {
       // alert("As you can see, the link no longer took you to jquery.com");
        var id = $(this).attr('id');
        var reference  = $(".confact_btn").attr('href');
        reference+=""+id;
        //alert(reference);
        $(".confact_btn").attr('href',reference);
        //event.preventDefault();
    });
    
    $(".edit_btn").click(function(event) {
      
        var id = $(this).attr('id');
       // var reference  = $(".ed_conf_btn").attr('href');
        var attribut = ".nom"+id;
      //  var nom = $(".nom"+id).text()+""+$(".prenom"+id).text();
	    $("#id_titre").val(id);
		$("#nom_titre").val($(".nom"+id).text());
		$("#prenom_titre").val($(".prenom"+id).text());
		
       // alert($("#titre").val());
       
    });
    $('#installday').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_4"
    }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });
   
});
