$( "#reboot" ).click(function() {
    $( "#interface" ).text("[Amalys TNS][Tatoo][Bras] Lancement de la commande de redemarrage ...");
    $parm = $( "#global" ).html();
    $("#global" ).text("");
   // alert($parm);
    var $url = $('#demo-form2').attr("t_url");
    var posting = $.post( $url);
    var info = $( "#interface" ).text();
    if(posting.readyState < 4){
        $( "#interface" ).text(info+"\n[Amalys TNS][Tatoo][Bras] Commande lancée, en attente de reponse ...");
    }
    posting.done(function( d ) {
        var info = $( "#interface" ).text();
        $( "#interface" ).text(info+"\n[Amalys TNS][Tatoo][Bras] "+d+" ...");
        var $url_check = $('#demo-form2').attr("c_url");
        var posting_c = $.post( $url_check);
        posting_c.done(function( d ) {
            var info = $( "#interface" ).text();
             $( "#interface" ).text(info+"\n[Amalys TNS][Tatoo][Bras] "+d+".");
             $( "#global" ).html($parm);
        });
         
    });
    
    
    //alert($url);
});