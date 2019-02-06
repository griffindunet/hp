$(function() {
  $('.perso_liste').hide(); //cacher rmc sport 1 au lancement de la page
});
$(function() {
  $('.films_liste').hide(); //cacher rmc sport 2 au lancement egalement 
});
$('#perso').click(function(){ //au clic afficher rmc sport 1 et cacher la class cacher
  $('.perso_liste').toggle(); //afficher et desactiver rmc sport 1 
    $(".cacher").hide(); //cacher cacher 
  $('.films_liste').hide(); //cacher rmc sport 2 au lancement egalement 

  

});
$('#film').click(function(){ 
  $('.films_liste').toggle();
  $(".cacher").hide();
  $(".perso_liste").hide();
});

