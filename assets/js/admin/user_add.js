//alert('ok');
var $url = $('#demo-form2').attr("t_url");
var check_user = $('#demo-form2').attr("c_url");
var ok = 1;
var load_inf = $('#load_inf').html();
//$('#demo-form2').submit(adduser);


function adduser(event){

    event.preventDefault();
    var login = $("#mail").val();
    var mdp  = $("#mdp_id").val();
    var nom   = $("#nom").val();
    var prenom = $("#p_id").val();
    var tel = $("#p_tel").val();
    var id_pro = $("#id_pro").val();
   // alert (login+" mdp "+mdp+" nom "+nom+" prenom "+prenom+" tel "+tel+" idpro "+ id_pro);
    var posting = $.post($url, {login: login,
       mdp: mdp,
       nom: nom,
       prenom: prenom,
       tel: tel,
       id_pro: id_pro});
    if(posting.readyState < 4){
        $('#myLoad').modal('show');
        $('#myModalHorizontal').modal('hide');
       // $('#btn-reg').val("Enregistrement en cours ...");
    }
    posting.done(function(d){
       //if(d == 1){
           // Enregistrement effectuée avec succès, on rafraichi la table
           $('#btn-reg').val("Enregistrer");
           var $table = $('#utilisateur');
           $table.bootstrapTable('refresh');
           $(':input','#demo-form2')
            .not(':button, :submit, :reset')
            .val('')
            .removeAttr('checked');
            $('#load_inf').html("<h4 style='text-align: center'>Utilisateur enregistré avec succès </h4>");
            setTimeout(function () {
                $('#myLoad').modal('hide');
                setTimeout(function (){
                    $('#load_inf').html(load_inf);
                }, 2000);
                
            }, 3000);
                
           //$('#myLoad').modal('hide');
          
       //}
    });

}
