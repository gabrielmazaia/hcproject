<?php /*Template Name: Selecione O Kit Rev 2*/ ?>
<?php get_header();?>
<?php 
if(! empty($_GET['origem'])):$pergunta1 = $_GET['origem'];endif;
if(! empty($_GET['pergunta1'])):$pergunta1 = $_GET['pergunta1'];endif;  /*Nome*/
    if(! empty($_GET['pergunta2'])):$pergunta2 = $_GET['pergunta2'];endif; /*E-mail*/
    if(! empty($_GET['pergunta3'])):$pergunta3 = $_GET['pergunta3'];endif; /*Telefone*/
    if(! empty($_GET['pergunta4'])):$pergunta4 = $_GET['pergunta4'];endif;  /*Genero*/
if(! empty($_GET['pergunta5'])):$pergunta5 = $_GET['pergunta5'];endif;  /*Idade*/
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


  <section class='container-fluid selecione-o-seu-kit'>
    <section class='container selecione-o-seu-kit'>
      <div class="row justify-content-center align-items-start">
        <div class="col-lg-6 col-md-4 px-md-3 px-5 py-md-0 text-start">
          <h1 class="mr-auto animated fadeInLeft order-lg-1 order-2" data-settings="{"_animation":"fadeInLeft","_animation_delay":800,"_position":"absolute"}">
          <img src="<?php bloginfo('template_url');?>/imagens/logotipo-hairconcept.svg" alt="" class="img-fluid">
          </h1>
        </div>
        <?php if($pergunta4 == 'Masculino' || $pergunta4 == 'masculino'):?>
          <div class="col-lg-6 col-md-8 px-md-3 px-4 mx-auto py-0 text-start bloco_text_titulo px-5 animated fadeInDown" data-settings="{"_animation":"fadeInDown","_animation_delay":800,"_position":"absolute"}">
            <h5>Agora que já sabemos do seu perfil e das suas necessidades, entendemos que o Kit abaixo é perfeito para iniciarmos a sua experiência Hair Concept!</h5>
          </div>
        <?php else:?>
          <div class="col-lg-6 col-md-8 px-md-3 px-4 mx-auto py-0 text-start bloco_text_titulo px-5 animated fadeInDown" data-settings="{"_animation":"fadeInDown","_animation_delay":800,"_position":"absolute"}">
            <h5>Agora que já sabemos do seu perfil e das suas necessidades, entendemos que o Kit abaixo é perfeito para iniciarmos a sua experiência Hair Concept!</h5>
          </div>
        <?php endif;?>

      </div>
    </section>
  </section>
<section class="container py-5 selecione-seu-kitz">
<?php if($pergunta4 == 'Masculino' || $pergunta4 == 'masculino'):?>
      <div class="row py-3 justify-content-center align-items-center dashed-bg">
        <div class="col-lg-5 animated fadeInLeft order-lg-1 order-2" data-settings="{"_animation":"fadeInLeft","_animation_delay":800,"_position":"absolute"}">
          <h2 class="mb-md-5 mb-2">HC Essentials</h2>
          <p>O nosso kit HC Essentials é formulado de acordo com as suas necessidades. Você receberá três produtos: shampoo especial para o couro cabeludo, shampoo para os fios e condicionador. Cada produto é personalizado com ativos que seu cabelo precisa. Tudo o que fazemos é pensando em você e na sua saúde capilar!</p>
          <h4>Vamos viver essa experiência juntos?</h4>
          <div class="border-dashed "></div>
          <h3 class="">R$ 390,00</h3>
          <a class="btn primary d-lg-inline-block" href="https://campanha.hairconceptbyrg.com.br/finalizar-compra/?add-to-cart=692&email=<?php echo $pergunta2;?>&fname=<?php echo $pergunta1;?>&fone=<?php echo $pergunta3;?>&note=Sexo:+<?php echo $pergunta4;?>%0AInfectado pelo COVID-19: <?php echo $perguntac1;?>%0AHá quanto tempo você teve COVID: <?php echo $perguntac2;?>%0AComo foram seus sintomas: <?php echo $perguntac3;?>%0AQuando percebeu alteracoes: <?php echo $perguntac4;?>%0AMedicação para o COVID: <?php echo $perguntac5;?>%0ADisfunção capilar antes do COVID: <?php echo $perguntac6;?>%0ATeve Febre COVID: <?php echo $perguntac7;?>%0AComo são os seus fios: <?php echo $perguntac8;?>%0AQuímica nos fios: <?php echo $perguntac9;?>%0AFrequencia de lavagem do cabelo: <?php echo $perguntac10;?>%0AExercicios Fisicos e Lavagem: <?php echo $perguntac11;?>%0AProblemas no couro cabeludo: <?php echo $perguntac12;?>%0AProblemas nos fios: <?php echo $perguntac13;?>%0ACalvicie na Familia: <?php echo $perguntac14;?>%0AProblemas hormonais: <?php echo $perguntac15;?>%0AProblemas de Saude: <?php echo $perguntac16;?>%0AMedicamento Continuo: <?php echo $perguntac17;?>%0AEstá grávida/amamentando: <?php echo $perguntac18;?>%0AAnestesia nos ultimos 6 meses: <?php echo $perguntac19;?>%0ARedução de Estomago: <?php echo $perguntac20;?>%0AFez tratamento capilar: <?php echo $perguntac21;?>%0AFez transplante ou implante: <?php echo $perguntac22;?>%0AVocê faz estas coisas: <?php echo $perguntac23;?>%0AFrequenta Piscina: <?php echo $perguntac24;?>%0AOrigem: <?php echo $origem;?>">Tudo o que o seu cabelo precisa a um clique!</a>

        </div>
        <div class="col-lg-7 animated fadeInRight order-1 order-md-2" data-settings="{"_animation":"fadeInRight","_animation_delay":800,"_position":"absolute"}">
          <img src="<?php bloginfo('template_url');?>/imagens/kitnew2.png" alt="" class="img-fluid mb-4 mb-lg-2">
        </div>
      </div>
<?php else:?>
      <div class="row py-3 justify-content-center align-items-center dashed-bg">
        <div class="col-lg-5 animated fadeInLeft order-lg-1 order-2" data-settings="{"_animation":"fadeInLeft","_animation_delay":800,"_position":"absolute"}">
          <h2 class="mb-md-5 mb-2">HC Essentials</h2>
          <p>O nosso kit HC Essentials é formulado de acordo com as suas necessidades. Você receberá três produtos: shampoo especial para o couro cabeludo, shampoo para os fios e condicionador. Cada produto é personalizado com ativos que seu cabelo precisa. Tudo o que fazemos é pensando em você e na sua saúde capilar!</p>
          <h4>Vamos viver essa experiência juntos?</h4>  
          <div class="border-dashed "></div>
          <h3 class="">R$ 390,00</h3>
          <a class="btn primary d-lg-inline-block" href="https://campanha.hairconceptbyrg.com.br/finalizar-compra/?add-to-cart=692&email=<?php echo $pergunta2;?>&fname=<?php echo $pergunta1;?>&fone=<?php echo $pergunta3;?>&note=Sexo:+<?php echo $pergunta4;?>%0AInfectado pelo COVID-19: <?php echo $perguntac1;?>%0AHá quanto tempo você teve COVID: <?php echo $perguntac2;?>%0AComo foram seus sintomas: <?php echo $perguntac3;?>%0AQuando percebeu alteracoes: <?php echo $perguntac4;?>%0AMedicação para o COVID: <?php echo $perguntac5;?>%0ADisfunção capilar antes do COVID: <?php echo $perguntac6;?>%0ATeve Febre COVID: <?php echo $perguntac7;?>%0AComo são os seus fios: <?php echo $perguntac8;?>%0AQuímica nos fios: <?php echo $perguntac9;?>%0AFrequencia de lavagem do cabelo: <?php echo $perguntac10;?>%0AExercicios Fisicos e Lavagem: <?php echo $perguntac11;?>%0AProblemas no couro cabeludo: <?php echo $perguntac12;?>%0AProblemas nos fios: <?php echo $perguntac13;?>%0ACalvicie na Familia: <?php echo $perguntac14;?>%0AProblemas hormonais: <?php echo $perguntac15;?>%0AProblemas de Saude: <?php echo $perguntac16;?>%0AMedicamento Continuo: <?php echo $perguntac17;?>%0AEstá grávida/amamentando: <?php echo $perguntac18;?>%0AAnestesia nos ultimos 6 meses: <?php echo $perguntac19;?>%0ARedução de Estomago: <?php echo $perguntac20;?>%0AFez tratamento capilar: <?php echo $perguntac21;?>%0AFez transplante ou implante: <?php echo $perguntac22;?>%0AVocê faz estas coisas: <?php echo $perguntac23;?>%0AFrequenta Piscina: <?php echo $perguntac24;?>%0AOrigem: <?php echo $origem;?>">Tudo o que o seu cabelo precisa a um clique!</a>

        </div>
        <div class="col-lg-7 animated fadeInRight order-1 order-md-2" data-settings="{"_animation":"fadeInRight","_animation_delay":800,"_position":"absolute"}">
          <img src="<?php bloginfo('template_url');?>/imagens/kitnew2.png" alt="" class="img-fluid mb-4 mb-lg-2">
        </div>
      </div>
<?php endif;?>
</section>
<section class='container selecione-o-seu-kit selecione-o-seu-kit-page py-5 mb-5'>

  <div class="row justify-content-center align-items-center"> 
    
      <div class="col-lg-4 item_card d-lg-inline-block d-none mb-5 animated fadeInUp" data-settings="{"_animation":"fadeInUp","_animation_delay":800,"_position":"absolute"}">
        <div class="holder">
        <img src="<?php bloginfo('template_url');?>/imagens/befresh.svg" alt="">
        <h4>HC Be Fresh</h4>
        <p>O HC Be Fresh Detox Shampoo é feito com uma base indicada
para higienizar o couro cabeludo, com ativos ajudam a limpar a oleosidade
Ou qualquer outro problema de maneira refrescante, renovando o couro e
Fios.
</p>
      </div>
      </div>
      <div class="col-lg-4 item_card d-lg-inline-block d-none mb-5 animated fadeInUp" data-settings="{"_animation":"fadeInUp","_animation_delay":800,"_position":"absolute"}">
        <div class="holder">
        <img src="<?php bloginfo('template_url');?>/imagens/behydrated.svg" alt="">
        <h4>HC Be Hydrated</h4>
        <p>Esse é indicado para os seus fios! Criamos o Shampoo Be Hydrated para ser usado no tratamento e recuperação de danos. Be Hydrated é feito para trazer nutrição e resultados incríveis!</p>      </div>
        </div>
      <div class="col-lg-4 item_card d-lg-inline-block d-none mb-5 animated fadeInUp" data-settings="{"_animation":"fadeInUp","_animation_delay":800,"_position":"absolute"}">
        <div class="holder">
        <img src="<?php bloginfo('template_url');?>/imagens/besmooth.svg" alt="">
        <h4>HC Be Smooth</h4>
        <p>Como todos os nossos produtos projetados para funcionar,
O HC Be Smooth Conditioner é formulado no Lab do Hair Concept
Adicionando blends, vitamionas, proteínas e óleos essenciais, de acordo
Com as suas necessidades. Com um bom pH, os resultados são únicos e
Surpreendentes.
</p>
      </div>
      </div>
      
      <div class="col-lg-12 col-12 text-start order-3 order-lg-1 animated fadeInUp" data-settings="{"_animation":"fadeInUp","_animation_delay":800,"_position":"absolute"}">
        <p><strong>Fique de olho!</strong> Nossos técnicos poderão entrar em contato com você para se aprofundar ainda mais na sua análise, a fim de potencializar ainda mais a sua personalização! 
</p>
        

      </div>
     
      <div class="mobile_carousel d-lg-none owl-carousel1 owl-carousel order-2 animated fadeInUp" data-settings="{"_animation":"fadeInUp","_animation_delay":800,"_position":"absolute"}">
        <div class="item_card">
          <div class="holder">
            <img src="<?php bloginfo('template_url');?>/imagens/befresh.svg" alt="">
            <h4>HC Be Fresh</h4>
        <p>O HC Be Fresh Detox Shampoo é feito com uma base indicada
para higienizar o couro cabeludo, com ativos ajudam a limpar a oleosidade
Ou qualquer outro problema de maneira refrescante, renovando o couro e
Fios.
</p>
          </div>
        </div>
        <div class="item_card">
          <div class="holder">
            <img src="<?php bloginfo('template_url');?>/imagens/behydrated.svg" alt="">
            <h4>HC Be Hydrated</h4>
        <p>Esse shampoo é indicado especialmente para os seus fios!
Criamos o HC Be Hydrated Shampoo para ser usado nas mechas
Para tratamento e recuperação de danos. Be Hydra é feito para
Trazer nutrição e resultados incríveis.</p>      </div>
 
        </div>
        <div class="item_card">
          <div class="holder">
            <img src="<?php bloginfo('template_url');?>/imagens/besmooth.svg" alt="">
            <h4>HC Be Smooth</h4>
        <p>Como todos os nossos produtos projetados para funcionar,
O HC Be Smooth Conditioner é formulado no Lab do Hair Concept
Adicionando blends, vitamionas, proteínas e óleos essenciais, de acordo
Com as suas necessidades. Com um bom pH, os resultados são únicos e
Surpreendentes.
</p>
          </div>
        </div>
      </div>
      


  </div>
</section>
<?php the_content();?>
<?php get_footer();?>
