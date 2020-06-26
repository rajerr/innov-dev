
function fileContentLoader(target, fileName, data){
    target.load(`./${fileName}`,data,function(response, status,detail){        
         if(status === 'error'){
            $("#table").html(`<p class="text-center alert alert-danger col mt-5">Le contenu demandé est introuvable!</p>`);
        }
    });
}
//Events

$(document).ready(function(){
    const saveChambre =$('#saveChambre');
    const etudiant =$('#etudiant');

    
    fileContentLoader(saveChambre,'savachambre.php',true);
    fileContentLoader(etudiant,'etudiant.php',false);
})

