$(document).ready(function() {
    $(".del_btn").click(function(event) {
       // alert("As you can see, the link no longer took you to jquery.com");
        var id = $(this).attr('data-id');
        var reference  = $(".conf_btn").attr('data-hr');
        reference+=""+id;
		$("#deletenodename").html($(this).attr('data-name'));
        //alert(reference);
        $(".conf_btn").attr('href',reference);
        //event.preventDefault();
    });

	
   $('#example_1').on('page-change.bs.table', function (e, row, $element) {
       $(".del_btn").click(function(event) {
       // alert("As you can see, the link no longer took you to jquery.com");
        var id = $(this).attr('data-id');
        var reference  = $(".conf_btn").attr('data-hr');
        reference+=""+id;
		$("#deletenodename").html($(this).attr('data-name'));
        //alert(reference);
        $(".conf_btn").attr('href',reference);
        //event.preventDefault();
    });
    
   
   });
   $('#example_1').on('post-body.bs.table', function (e, row, $element) {
	 
	   $(".del_btn").click(function(event) {
       // alert("As you can see, the link no longer took you to jquery.com");
        var id = $(this).attr('data-id');
        var reference  = $(".conf_btn").attr('data-hr');
        reference+=""+id;
		$("#deletenodename").html($(this).attr('data-name'));
        //alert(reference);
        $(".conf_btn").attr('href',reference);
        //event.preventDefault();
    });
    
	 }); 
});

