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
<?php 
if(! empty($_GET['pergunta1'])):$pergunta1 = $_GET['pergunta1'];endif;
    if(! empty($_GET['pergunta2'])):$pergunta2 = $_GET['pergunta2'];endif;
    if(! empty($_GET['pergunta3'])):$pergunta3 = $_GET['pergunta3'];endif;
    if(! empty($_GET['pergunta4'])):$pergunta4 = $_GET['pergunta4'];endif; 
 if(! empty($_GET['pergunta5'])):$pergunta4 = $_GET['pergunta5'];endif; 
/*RESPOSTAS*/
if(! empty($_GET['perguntac1'])):$perguntac1 = $_GET['perguntac1'];endif; /*6-	Você já foi infectado pelo COVID-19?*/
if(! empty($_GET['perguntac2'])):$perguntac2 = $_GET['perguntac2'];endif;/*7-	Há quanto tempo você teve COVID? */
if(! empty($_GET['perguntac3'])):$perguntac3 = $_GET['perguntac3'];endif;/*8-	Como foram seus sintomas? */
if(! empty($_GET['perguntac4'])):$perguntac4 = $_GET['perguntac4'];endif;/*9-	Quando você percebeu as alterações no seu couro cabeludo ou fio? */
if(! empty($_GET['perguntac5'])):$perguntac5 = $_GET['perguntac5'];endif;/*10-	Você fez uso de alguma medicação para o COVID? */
if(! empty($_GET['perguntac6'])):$perguntac6 = $_GET['perguntac6'];endif;/*11-	Me conta, você tinha algum tipo de disfunção capilar antes do COVID? */
if(! empty($_GET['perguntac7'])):$perguntac7 = $_GET['perguntac7'];endif;/*12-	Preciso saber se você teve febre antes, durante ou mesmo depois do COVID. */

if(! empty($_GET['perguntac9'])):$perguntac8 = $_GET['perguntac9'];endif;/*13-	Como são os seus fios: */
if(! empty($_GET['perguntac10'])):$perguntac9 = $_GET['perguntac10'];endif;/*14-	Marque aqui qual tipo de química você tem nos fios: */
if(! empty($_GET['perguntac11'])):$perguntac10 = $_GET['perguntac11'];endif;/*15-	Com qual frequência você lava os seus cabelos? Essa pergunta é extremamente importante então preste atenção para responder: */
if(! empty($_GET['perguntac12'])):$perguntac11 = $_GET['perguntac12'];endif;/*16-	Eu preciso saber se você faz exercícios físicos. E se você faz, logo após o treino, você lava os cabelos?  */
if(! empty($_GET['perguntac13'])):$perguntac12 = $_GET['perguntac13'];endif;/*17-	Essa pergunta é extremamente importante. Se foque agora 100% no seu couro cabeludo. Como está o seu couro cabeludo?  */
if(! empty($_GET['perguntac14'])):$perguntac13 = $_GET['perguntac14'];endif;/*18-	Agora vamos falar dos seus fios, marque pra mim como estão seus fios hoje: */
if(! empty($_GET['perguntac15'])):$perguntac14 = $_GET['perguntac15'];endif;/*19-	Vamos falar do seu histórico familiar, existe alopecia ou calvície na sua família?  */
if(! empty($_GET['perguntac16'])):$perguntac15 = $_GET['perguntac16'];endif;/*20-	Os hormônios mexem com absolutamente tudo nas nossas vidas. Por isso preciso saber se nesse momento você tem alguma dessas condições: */
if(! empty($_GET['perguntac17'])):$perguntac16 = $_GET['perguntac17'];endif;/*21-	Você tem algum desses problema de saúde? */
if(! empty($_GET['perguntac18'])):$perguntac17 = $_GET['perguntac18'];endif;/*22-	Você faz uso contínuo de algum medicamento? */
if(! empty($_GET['perguntac19'])):$perguntac18 = $_GET['perguntac19'];endif;/*23-	Agora me conte se você está em algum destes momentos? */
if(! empty($_GET['perguntac20'])):$perguntac19 = $_GET['perguntac20'];endif;/*24-	Por um acaso, nos últimos 6 meses você tomou algum tipo de anestesia? */
if(! empty($_GET['perguntac21'])):$perguntac20 = $_GET['perguntac21'];endif;/*25-	Você já passou por algum processo de redução de estomago? */ 
if(! empty($_GET['perguntac22'])):$perguntac21 = $_GET['perguntac22'];endif;/*26-	Você já fez ou faz algum tipo de tratamento para queda de cabelo? */
if(! empty($_GET['perguntac23'])):$perguntac22 = $_GET['perguntac23'];endif;/*27-	Você fez algum transplante ou implante capilar? */
if(! empty($_GET['perguntac24'])):$perguntac23 = $_GET['perguntac24'];endif;/*28-	Agora eu preciso saber exatamente a verdade! Coloca aqui pra mim se você faz alguma dessas coisas: */
if(! empty($_GET['perguntac25'])):$perguntac24 = $_GET['perguntac25'];endif;/*29-	Você frequenta praia ou piscina regularmente?  */

    ?>  
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    -->

    <?php wp_footer();?>
    <script src="<?php bloginfo('template_url');?>/js/owl/owl.carousel.min.js"></script>
    <script>
var owl1 = $(".owl-carousel1");

owl1.owlCarousel({
    loop:true,
    margin:5,
    responsiveClass:true,
    autoplay:true,
    autoHeight:true,
    animateOut: 'fadeOut',
              autoplayTimeout:5000,
              autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:true,
            loop:true,
              
        },
        600:{
            items:1,
            nav:false,
            loop:true,
              
        },
        1000:{
            items:1,
            nav:true,
            loop:true,
              
        }
    }
   
});
		$('.customNextBtn1').click(function() {
			owl1.trigger('next.owl.carousel');
		});
		// Go to the previous item
		$('.customPrevBtn1').click(function() {
			// With optional speed parameter
			// Parameters has to be in square bracket '[]'
			owl1.trigger('prev.owl.carousel', [300]);
		});
    var owl2 = $(".owl-carousel2");

      owl2.owlCarousel({
          loop:true,
          margin:5,
          responsiveClass:true,
          autoplay:true,
		  autoHeight:true,
                    autoplayTimeout:5000,
                    autoplayHoverPause:true,
          responsive:{
              0:{
                  items:1,
                  nav:true,
                  loop:true,
                    
              },
              600:{
                  items:1,
                  nav:false,
                  loop:true,
                    
              },
              1000:{
                  items:1,
                  nav:true,
                  loop:true,
                    
              }
          }
         
      });
      $('.customNextBtn2').click(function() {
            owl2.trigger('next.owl.carousel');
        });
        // Go to the previous item
        $('.customPrevBtn2').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl2.trigger('prev.owl.carousel', [300]);
        });

        var owl3 = $(".owl-carousel3");

      owl3.owlCarousel({
          loop:true,
          margin:5,
          responsiveClass:true,
		  autoHeight:true,
          autoplay:true,
                    autoplayTimeout:5000,
                    autoplayHoverPause:true,
          responsive:{
              0:{
                  items:1,
                  nav:true,
                  loop:true,
                    
              },
              600:{
                  items:1,
                  nav:false,
                  loop:true,
                    
              },
              1000:{
                  items:3,
                  nav:true,
                  loop:true,
                    
              }
          }
         
      });
      $('.customNextBtn3').click(function() {
            owl3.trigger('next.owl.carousel');
        });
        // Go to the previous item
        $('.customPrevBtn3').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl3.trigger('prev.owl.carousel', [300]);
        });
		$("input[name=selecioneokit]").change(function(){
			var urllimpa = "https://campanha.hairconceptbyrg.com.br/finalizar-compra/?add-to-cart=";
			var id1 = "";
			var id2 = "";
			var id3 = "";
			var id4 = "";
			var id5 = "";
			var id6 = "";
			var id7 = "";
			var id8 = "";
			var id9 = "";
			var urlform = "&email=<?php echo $pergunta2;?>&fname=<?php echo $pergunta1;?>&fone=<?php echo $pergunta3;?>&note=Sexo:+<?php echo $pergunta4;?>%0AInfectado pelo COVID-19: <?php echo $perguntac1;?>%0AHá quanto tempo você teve COVID: <?php echo $perguntac2;?>%0AComo foram seus sintomas: <?php echo $perguntac3;?>%0AQuando percebeu alteracoes: <?php echo $perguntac4;?>%0AMedicação para o COVID: <?php echo $perguntac5;?>%0ADisfunção capilar antes do COVID: <?php echo $perguntac6;?>%0ATeve Febre COVID: <?php echo $perguntac7;?>%0AComo são os seus fios: <?php echo $perguntac8;?>%0AQuímica nos fios: <?php echo $perguntac9;?>%0AFrequencia de lavagem do cabelo: <?php echo $perguntac10;?>%0AExercicios Fisicos e Lavagem: <?php echo $perguntac11;?>%0AProblemas no couro cabeludo: <?php echo $perguntac12;?>%0AProblemas nos fios: <?php echo $perguntac13;?>%0ACalvicie na Familia: <?php echo $perguntac14;?>%0AProblemas hormonais: <?php echo $perguntac15;?>%0AProblemas de Saude: <?php echo $perguntac16;?>%0AMedicamento Continuo: <?php echo $perguntac17;?>%0AEstá grávida/amamentando: <?php echo $perguntac18;?>%0AAnestesia nos ultimos 6 meses: <?php echo $perguntac19;?>%0ARedução de Estomago: <?php echo $perguntac20;?>%0AFez tratamento capilar: <?php echo $perguntac21;?>%0AFez transplante ou implante: <?php echo $perguntac22;?>%0AVocê faz estas coisas: <?php echo $perguntac23;?>%0AFrequenta Piscina: <?php echo $perguntac24;?>%0AOrigem: <?php echo $origem;?>";
			
			
			if($("input#kit1").is(":checked",true)){
				$(".kit1").fadeIn();
				$(".kit1").addClass('ativo');
				$(".button1").addClass('ativo');
				id1 = "1128,";
			}else{
				$(".kit1").fadeOut();
				$(".kit1").removeClass('ativo');
				$(".button1").removeClass('ativo');
				id1 = "";
			}
			if($("input#kit2").is(":checked",true)){	
				$(".kit2").fadeIn();
				$(".kit2").addClass('ativo');
				$(".button2").addClass('ativo');
				id2 = "1129,";
			}else{
				$(".kit2").fadeOut();
				$(".kit2").removeClass('ativo');
				$(".button2").removeClass('ativo');
				id2 = "";
			}
			if($("input#kit3").is(":checked",true)){	
				$(".kit3").fadeIn();
				$(".kit3").addClass('ativo');
				$(".button3").addClass('ativo');
				id3 = "1131,";
			}else{
				$(".kit3").fadeOut();
				$(".kit3").removeClass('ativo');
				$(".button3").removeClass('ativo');
				id3 = "";
			}
			if($("input#kit4").is(":checked",true)){
				$(".kit4").fadeIn();
				$(".kit4").addClass('ativo');
				$(".button4").addClass('ativo');
				id4 = "1132,";
			}else{
				$(".kit4").fadeOut();
				$(".kit4").removeClass('ativo');
				$(".button4").removeClass('ativo');
				id4 = "";
			}
			if($("input#kit5").is(":checked",true)){
				$(".kit5").fadeIn();
				$(".kit5").addClass('ativo');
				$(".button5").addClass('ativo');
				id5 = "1150,";
			}else{
				$(".kit5").fadeOut();
				$(".kit5").removeClass('ativo');
				$(".button5").removeClass('ativo');
				id5 = "";
			}
			if($("input#kit6").is(":checked",true)){
				$(".kit6").fadeIn();
				$(".kit6").addClass('ativo');
				$(".button6").addClass('ativo');
				id6 = "1151,";
			}else{
				$(".kit6").fadeOut();
				$(".kit6").removeClass('ativo');
				$(".button6").removeClass('ativo');
				id6 = "";
			}
			if($("input#kit7").is(":checked",true)){
				$(".kit7").fadeIn();
				$(".kit7").addClass('ativo');
				$(".button7").addClass('ativo');
				id7 = "1152,";
			}else{
				$(".kit7").fadeOut();
				$(".kit7").removeClass('ativo');
				$(".button7").removeClass('ativo');
				id7 = "";
			}
			if($("input#kit8").is(":checked",true)){
				$(".kit8").fadeIn();
				$(".kit8").addClass('ativo');
				$(".button8").addClass('ativo');
				id8 = "1153,";
			}else{
				$(".kit8").fadeOut();
				$(".kit8").removeClass('ativo');
				$(".button8").removeClass('ativo');
				id8 = "";
			}
			if($("input#kit9").is(":checked",true)){
				$(".kit9").fadeIn();
				$(".kit9").addClass('ativo');
				$(".button9").addClass('ativo');
				id9 = "1154,";
			}else{
				$(".kit9").fadeOut();
				$(".kit9").removeClass('ativo');
				$(".button9").removeClass('ativo');
				id9 = "";
			}
			
			var urlid = id1+id2+id3+id4+id5+id6+id7+id8+id9;
			if(urlid == ""){
				$(".acrescentando").fadeOut();
			}else{
				$(".acrescentando").fadeIn();
			}
			console.log(id1+id2+id3+id4+id5+id6+id7+id8+id9);
			
			var urlfinal = urllimpa+urlid+urlform;
			$("a.finishgame").prop("href", urlfinal);
		});
		$(".opencollapse").click(function(){
		    $(".collapse_content").toggleClass('show');
		})
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
