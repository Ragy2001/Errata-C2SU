/* ---------- C2SU ----------- */

/* modifié et crée par Eol (Mayeul) en juin 2020 */








// OUVERTURE DU CONTENU PRECIS DES ERRATA

$('.erratumTitle').click(function() {  // animation d'ouverture de l'espace pour les précisions de l'erratum
	$(this).next().animate({
		height: 'toggle'
	}, 250).children().stop(true, true).delay(300).each(  // on anime séparément chaque sous-div qui apparaît et slideIn + Rotate de la gauche (avec delay)
		function(i) {
			$(this).delay(100 * i).queue(
				function() {
					$(this).toggleClass('open');
				}
			)	

	});
	
});





$(document).ready(function() {
    
    


    //confirmation de suppression d'un erratum
    $('.supprErr').click(function(e) {
        if(!confirm('Voulez vous vraiment supprimer cet erratum ? Cette action est irréversible.')) {
            e.preventDefault();
        }
    });






    // ----- ICÔNES ------

    //animation de 'wobble' des icônes de modification et suppression
    $('.modifErr').siblings('span').hover(function() {
        $('.modifErr').toggleClass('wobbleEffect');
    });

    $('.supprErr').siblings('span').hover(function() {
        $('.supprErr').toggleClass('wobbleEffect');
    });

    //animation de changement de couleur et 'bounce' des pouces
    $('.upvoteErr').siblings('span').click(function() {
        $('.upvoteErr').toggleClass('bounceEffect');
        $('.upvoteErr').css('color', '#27ae60');
    });

    $('.downvoteErr').siblings('span').click(function() {
        $('.downvoteErr').toggleClass('bounceEffect');
        $('.downvoteErr').css('color', '#c0392b');
    });

    // revoir spécificité du pouce (juste pour UN erratum) et revoir effet on click

    
});