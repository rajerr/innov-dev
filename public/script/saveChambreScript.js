$(document).ready(function(){
    $('#enregistrer').click(function(){
 
     const numero = $('#numero').val();
     const type = $('#type').val();
     const num_batiment = $('#num_batiment').val();
     
     if ( type=="" || num_batiment=="") {
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
                 alert('enregistrement chmabre effectué')
                if(data){
                    $('#table').load('pages/chambre'); 
                }else{
                    alert('echec')
                }
             }
         });
 
     })
 })