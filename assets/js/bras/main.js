var $table = $('#session');
var $url = $table.attr("data-url");

setInterval(function(){
    var posting = $.post( $url);
   // var $status = posting();
    //if(!$status) $('#info').text("Mis à jour en cours...");
    if(posting.readyState < 4){
        $('#info').text("Rafraichissement en cours ...");
    }
    posting.done(function( d ) {
        $table.bootstrapTable('removeAll');
        $table.bootstrapTable('prepend',d);
        $table.bootstrapTable('scrollTo', 'bottom');
        var currentdate = new Date(); 
        var datetime = "Dernière mise à jour: " + currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes();
        //console.log(datetime);
        $('#info').text(datetime);
        //console.log(posting.readyState);
       // console.log(d);
        //print(d);
    });
 
    posting.fail(function(){
        console.log("requete echouée");
    });
    
},60000); 
