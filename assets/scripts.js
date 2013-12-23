jQuery(document).ready(function(){
	jQuery('#form').submit(function(){
		var dados = jQuery( this ).serialize();

		jQuery.ajax({
			type: "POST",
			url: "enviar.php",
			data: dados,
			success: function( data )
			{
				$('#form').append('<p class="success">Um e-mail foi enviado, avisando de sua decisão.</p>');
			}
		});
		
		return false;
	});
});
$("#deal").click(function () {
    $(this).text(function(i, v){
       return v === 'Gostei, vamos fazer negócio!' ? 'Ótimo! Entrarei em contato.' : 'Ótimo! Entrarei em contato.'
    });
    $(this).toggleClass("deal-done");
});
var $tada = $(".deal");
setInterval(function(){
    $tada.toggleClass("tada");
}, 5000);