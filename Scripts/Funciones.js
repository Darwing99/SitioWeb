// $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
//   var next = $(this).next();
//   if (!next.length) {
//     next = $(this).siblings(':first');
//   }
//   next.children(':first-child').clone().appendTo($(this));

//   for (var i=0;i<4;i++) {
//     next=next.next();
//     if (!next.length) {
//       next=$(this).siblings(':first');
//     }
//     next.children(':first-child').clone().appendTo($(this));
//   }
// });  
  
  
//   (function () {

//     var options = {

//         facebook: "628851103865100", // Facebook page ID

//         whatsapp: "+504 3308-70122", // WhatsApp number

//         call_to_action: "Has tus pedidos", // Call to action

//         button_color: "#129BF4", // Color of button

//         position: "right", // Position may be ‘right’ or ‘left’

//         order: "facebook,whatsapp", // Order of buttons

//     };

//     var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static."+ host;

//     var s = document.createElement('script'); s.type = 'text/javascript'; 
//     s.async = true; s.src = url + '/widget-send-button/js/init.js';

//     s.onload = function () { WhWidgetSendButton.init(host, proto, options); };

//     var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);

// })();



// Forgot Password
function modal(){      
    $("#olvidado").click(function(){
      $("#forgot").modal('show');
  });
}


// validando datos de contactos
$(document).ready(function(){
$('#ver').click(function(){
          $('#tab').toggle();
          $('#ver').val("mostrar");
      
    });
  $('#contacto').click(function(){
    var nombre=document.getElementById('nombre').value;
    var telefono=document.getElementById('telefono').value;
    var email=document.getElementById('email').value;
    var mensaje=document.getElementById('mensaje').value;
    if(nombre==""){
        document.getElementById('nombre').style.setProperty("border-color","red");
        document.getElementById('alerta').style.setProperty("display","block");  
        return false; 
        
    }if(email==""){
      document.getElementById('email').style.setProperty("border-color","red"); 
      document.getElementById('alerta').style.setProperty("display","block"); 
      return false;
       
    }
    if(telefono==""){
      document.getElementById('telefono').style.setProperty("border-color","red"); 
      document.getElementById('alerta').style.setProperty("display","block");
      return false;  
       
    }
    if(mensaje==""){
      document.getElementById('mensaje').style.setProperty("border-color","red");   
      document.getElementById('alerta').style.setProperty("display","block"); 
      $('#alerta')
      return false; 
    
    }else{
      $.ajax({
        type: 'POST',
        url: 'https://mandrillapp.com/api/1.0/messages/send.json',
        data: {
          'key': 'YOUR API KEY HERE',
          'message': {
            'from_email': 'darwing01000100gmail.com',
            'to': [
                {
                  'email': email,
                  'name': nombre,
                  'type': 'to'
                }
              ],
            'autotext': 'true',
            'subject': mensaje,
            'html': 'YOUR EMAIL CONTENT HERE! YOU CAN USE HTML!'
          }
        }
       }).done(function(response) {
         console.log(response); // if you're into that sorta thing
       });
      $('#modal_email').modal('show');
    }
});


var typed = new Typed(".typing", {
  strings: ["Bebidas Calientes", "Bebidas Frias", "Desayunos", "Almuerzos", "Postres"],
  typeSpeed: 100,
  backSpeed: 60,
  loop: true
});

$('.icon').click(function(){
  $('span').toggleClass("cancel");
});


	$('.fixed-action-btn').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		},200);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.fixed-action-btn').slideDown(300);
		} else {
			$('.fixed-action-btn').slideUp(300);
		}
	});
});


$(function (){
  $(window).scroll(function(){
     if ($(this).scrollTop() > 80) {
      $('.navbar').addClass("aqua-gradient");
      $('.dropdown-menu').addClass("aqua-gradient");

     } else {
      $(".navbar").removeClass("aqua-gradient");
      $('.dropdown-menu').removeClass("aqua-gradient");
     }
  });
});



 