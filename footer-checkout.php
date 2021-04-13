  <section class="container-fluid politicas">
	  <div class="col-12">
		  <img src="https://campanha.hairconceptbyrg.com.br/wp-content/uploads/2021/03/logotipo-hairconcept-1-1.svg" class="logotipo-footer d-block mx-auto" style="width: 90%; max-width: 250px; margin-bottom: 30px;">
	  </div>
	  <h4>
		  Desenvolvido por Hair Concept By Roberta Gomes
	  </h4>
	<hr class="dashed">
	<div class="container">
		<div class="row">
		<div class="col-lg-6">
			<p>
				RVD BELEZA LTDA<br/>
CNPJ: 35.736.675/0001-88
			</p>
		</div>
		<div class="col-lg-6">
			<p>
				<a href="<?php bloginfo('url');?>/politica-privacidade" target="_blank">Política de Privacidade</a> | <a href="<?php bloginfo('url');?>/termos-de-uso" target="_blank">Termos de Uso</a>
			</p>
		</div>
	  </div>
	  </div>
  </section>
  
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/js/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/js/owl/assets/owl.carousel.default.min.css">
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <?php 
		if(! empty($_GET['note'])):
        $encoded = urlencode($_GET["note"]);
        
          $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
          $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
          $repassing_encoded = str_replace($entities, $replacements, $encoded);
          //echo $repassing_encoded;
      ?>
    <script>
      var getUrlParameter = function getUrlParameter(sParam) {
      var sPageURL = window.location.search.substring(1),
              sURLVariables = sPageURL.split('&'),
              sParameterName,
              i;

          for (i = 0; i < sURLVariables.length; i++) {
              sParameterName = sURLVariables[i].split('=');

              if (sParameterName[0] === sParam) {
                  return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
              }
          }
      };
      var note = getUrlParameter('note');
      function decode(note) {
          return decodeURIComponent(note.replace(/\+/g,  " "));
      }
      $(document).ready(function(){
        $("textarea#order_comments").val(decode(note));
      });
		
    </script>
<?php endif;?>
<?php wp_footer();?>
<script src="<?php bloginfo('template_url');?>/js/owl/owl.carousel.min.js"></script>
<script>

      var owl = $(".owl-carousel4");

      owl.owlCarousel({
          loop:true,
          margin:5,
          responsiveClass:true,
          responsive:{
              0:{
                  items:1,
                  nav:true,
                  loop:true,
                    autoplay:true,
                    autoplayTimeout:3000,
                    autoplayHoverPause:true,
              },
              600:{
                  items:1,
                  nav:false,
                  loop:true,
                    autoplay:true,
                    autoplayTimeout:3000,
                    autoplayHoverPause:true,
              },
              1000:{
                  items:1,
                  nav:true,
                  loop:true,
                    autoplay:true,
                    autoplayTimeout:3000,
                    autoplayHoverPause:true,
              }
          }
         
      });
        $('.customNextBtn').click(function() {
            owl.trigger('next.owl.carousel');
        });
        // Go to the previous item
        $('.customPrevBtn').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
        });
jQuery(function( $ ) {

$( "form.checkout" ).on( "click", "input.qty", function( e ) {

var data = {

action: 'update_order_review',

security: wc_checkout_params.update_order_review_nonce,

post_data: $( 'form.checkout' ).serialize()

};




jQuery.post( add_quantity.ajax_url, data, function( response )

{

$( 'body' ).trigger( 'update_checkout' );

});

});

});
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4MG5Z4E9K0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4MG5Z4E9K0');
</script>
  </body>
</html>
