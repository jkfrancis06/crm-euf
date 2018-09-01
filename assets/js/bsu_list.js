
$(document).ready(function() {
	if($(".del_btn").length){
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
	}

	
   $('#example_1').on('page-change.bs.table', function (e, row, $element) {
      if($(".del_btn").length){
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
    
	  }
	  
   });
   
   $('#example_1').on('post-body.bs.table', function (e, row, $element) {
	if($(".del_btn").length){
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
    }
   
   });
   
   if($("#btnSave").length){
    $("#btnSave").click(function() { 
        html2canvas($("#bsuviewcontent"), {
            onrendered: function(canvas) {
                theCanvas = canvas;
				ctx = canvas.getContext("2d");
                //document.body.appendChild(canvas);

                // Convert and download as image 
                //Canvas2Image.saveAsPNG(canvas); 
				canvas.toBlob(function(blob) {
					saveAs(blob, "capture.png");
				});
                //$("#img-out").append(canvas);
                // Clean up 
                //document.body.removeChild(canvas);
				 //var imgageData = theCanvas.toDataURL("image/png");
				// Now browser starts downloading it instead of just showing it
				//var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
   
            }
        });
    });
   }
});

