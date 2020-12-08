/* ---------- C2SU ----------- */

/* modifié et crée par Eol (Mayeul) en juin 2020 */














$(document).ready(function() {


    /* bouton d'upload d'une photo */
    $('.addPhoto input').change(function() {
        // on récupère le nom du fichier et on enlève le chemin
        const fileName = $(this).val().split("\\"); 

        if(fileName.length)
            $(this).text(fileName[fileName.length-1]);

        // on intègre ce nom dans un <p> vide
        $('.addPhoto p').text(fileName[2])  
    });






    
});