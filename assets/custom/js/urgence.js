
jQuery(function($){

$("#DepannagesUrgences").after('<div class="Durgences" style="right: -340px;"><div class="Durgences-icon"></div><a href="tel:+33667275050"><span class="Dtext">24h/24 et 7j/7</span><span class="Dnumber">06 67 27 50 50</span></a></div>');

$('.Durgences-icon').toggle(function(event){
    event.preventDefault();
    $('.Durgences').animate({right: '-1px'}, 'slow');
},function(event){  
    event.preventDefault();    
    $('.Durgences').animate({right: '-340px'}, 'slow'); 
});



});