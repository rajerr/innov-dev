$(document).ready(function(){
    $('#valider').click(function(){
 
     const numero = $('#numero').val();
     const type = $('#type').val();
     const num_batiment = $('#num_batiment').val();
     const password = $('#password').val();
     const cpassword = $('#cpassword').val();
    // const photo = $('#photo').val();
     
     if (numero=="" || type=="" || num_batiment=="") {
         alert('tous les champs sont obligatoires');
         return false;
         
     }
         $.ajax({
             type: "POST",
             url: "../controller/chambreController.php",
             data:{numero:numero,type:type,num_batiment:num_batiment},
             dataType: "JSON",
             success: function (data) {
                 console.log(data);
                 alert('enregistrement admin effectué')
                if(data){
                    $('#table').load('pages/liste-joueur.php'); 
                }else{
                    alert('echec')
                }
             }
         });
 
     })
 })