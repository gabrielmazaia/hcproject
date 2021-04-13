<?php /*Template Name: Selecione O Kit - Página Loja Salões*/ ?>
<?php get_header();?>
<?php 
if(! empty($_GET['origem'])):$pergunta1 = $_GET['origem'];endif;
if(! empty($_GET['pergunta1'])):$pergunta1 = $_GET['pergunta1'];endif;
    if(! empty($_GET['pergunta2'])):$pergunta2 = $_GET['pergunta2'];endif;
    if(! empty($_GET['pergunta3'])):$pergunta3 = $_GET['pergunta3'];endif;
    if(! empty($_GET['pergunta4'])):$pergunta5 = $_GET['pergunta4'];endif; 
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

 <?php the_content();?>
 <style>
     .selecione-o-seu-kit{
         max-width: 1440px;
     }
 </style>
<section class='container selecione-o-seu-kit valendocovid19'>
  <div class="row">

    <?php// if($pergunta4 == 'Masculino' || $pergunta4 == 'masculino'):?>
      <div class="col-xl-3 col-md-6 col-12 text-center mb-md-0 mb-5 ">
          <div class="bordasviradinhas">
        <div class="holdtext">
            <h5 class="mb-3">Kit 1</h5>
        <h4>Recovery Therapy Package AT HOME </br/>(4 aplicações)</h4>
        <p class="min-height1">O Protocolo Recovery com 4 aplicações, especialmente preparado para você fazer em casa! Cada semana, uma terapia diferente para acabar com a queda de cabelo.
<br/><br/>Composto por: <br/>HC Be Fresh (30 ml) <br/>HC Peeling (20 ml)
 <br/>HC Be Hydrated (30 ml) <br/>HC Therapy Mask (40 g)<br/>4 Aplicações<br/><br/><label class="opencollapse">Saber Mais +</label></p>

        <div class="collapse_content collapse">
          <p><strong>Semana 01:</strong> o foco é a hidratação, com os blends ideais para as necessidades dos seus fios!<br/><br/>
<strong>Semana 02:</strong> agora é hora de nutrir o seu cabelo!<br/><br/>
<strong>Semana 03:</strong> sessão especial para repor todas as vitaminas!<br/><br/>
<strong>Semana 04:</strong> a reconstrução completa e personalizada!<br/>
</p>
        </div> 
        </div>
        <img src="<?php bloginfo('template_url');?>/imagens/kits/Recovery_Superior.png" alt="" class="img-fluid ">
        <h6>R$ 480,00</h6>
	    
        
        	<div class="selecionar">
				<input type="checkbox" id="kit1" name="selecioneokit">
				<label for="kit1">
					<span class="remover"><i class="fas fa-times"></i>Remover do carrinho</span>
					<span class="acrescentar">Acrescentar ao carrinho</span>
				</label>
			</div>
			  <a class="btn primary finishgame button1" href="">Prosseguir para o Pagamento</a>
		  </div>
      </div>
     <div class="col-xl-3 col-md-6 col-12 text-center mb-md-0 mb-5 ">
          <div class="bordasviradinhas">
        <div class="holdtext">
            <h5 class="mb-3">Kit 2</h5>
        <h4>Recovery Home Care Kit</h4>
        <p class="min-height1">Os produtos ideais para controlar a queda de cabelo de
maneira isolada ou pós-COVID. São 02 shampoos, 01
condicionador, 01 tônico e 01 vitamina que farão toda a
diferença!<br/><br/>Composto por: <br/>HC Be Fresh Shampoo (250 ml) <br/>HC Be Hydrated Shampoo (250 ml)<br/>HC Be Smooth Conditioner (250ml)<br/>HC Tonic (60 ml)
<br/>HC Vitamin (60 cp)</p>
        </div>
        <img src="<?php bloginfo('template_url');?>/imagens/kits/ProdutosHC_Recovery.png" alt="" class="img-fluid ">
        <h6><di>de <span>R$ 735,00</span></di><dis>por R$ 514,50</dis></h6>
        
			  <div class="selecionar">
				<input type="checkbox" id="kit2" name="selecioneokit">
				<label for="kit2">
					<span class="remover"><i class="fas fa-times"></i>Remover do carrinho</span>
					<span class="acrescentar">Acrescentar ao carrinho</span>
				</label>
			</div>
			  <a class="btn primary finishgame button2" href="">Prosseguir para o Pagamento</a>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 col-12 text-center mb-md-0 mb-5 ">
          <div class="bordasviradinhas">
        <div class="holdtext">
            <h5 class="mb-3">Kit 3</h5>
        <h4>Home Care</h4>
        <p class="min-height1">O kit personalizado (e necessário) para cuidar da saúde dos seus fios e couro cabeludo! Todos os produtos são personalizados a partir de uma análise de como está o seu cabelo, com blends que potencializam resultados!<br/><br/>Composto por: <br/>HC Be Fresh Shampoo (250 ml)<br/> HC Be Hydrated Shampoo (250 ml)<br/> HC Be Smooth Conditioner (250ml)</p>
        </div>
        <img src="<?php bloginfo('template_url');?>/imagens/kits/ProdutosHC_BasicKit.png" alt="" class="img-fluid ">
        <h6><di>de <span>R$ 390,00</span></di><dis>por R$ 273,00</dis></h6>
        
			  <div class="selecionar">
				<input type="checkbox" id="kit3" name="selecioneokit">
				<label for="kit3">
					<span class="remover"><i class="fas fa-times"></i>Remover do carrinho</span>
					<span class="acrescentar">Acrescentar ao carrinho</span>
				</label>
			</div>
			  <a class="btn primary finishgame button3" href="">Prosseguir para o Pagamento</a>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 col-12 text-center mb-md-0 mb-5 ">
          <div class="bordasviradinhas">
        <div class="holdtext">
            <h5 class="mb-3">Kit 4</h5>
        <h4>HC THERAPY AT HOME <br/>(1 Aplicação)</h4>
        <p class="min-height1">Uma terapia personalizada (hidratação capilar), especialmente desenvolvida para os seus cabelos, para fácil aplicação em casa!<br/><br/>Composto por: <br/>HC Be Fresh (30 ml)<br/>HC Peeling (20 ml)<br/>HC Be Hydrated (30 ml)
<br/>HC Therapy Mask (40 g)<br/></p>
        </div>
        <img src="<?php bloginfo('template_url');?>/imagens/kits/Recovery_atHome.png" alt="" class="img-fluid ">
        <h6>R$ 150,00</h6>
        
			  <div class="selecionar">
				<input type="checkbox" id="kit4" name="selecioneokit">
				<label for="kit4">
					<span class="remover"><i class="fas fa-times"></i>Remover do carrinho</span>
					<span class="acrescentar">Acrescentar ao carrinho</span>
				</label>
			</div>
			  <a class="btn primary finishgame button4" href="">Prosseguir para o Pagamento</a>
        </div>
      </div>
	  <?php /*Produtos Avulsos*/?>
	  
	   <div class="col-xl-3 col-md-6 col-12 text-center mb-md-0 mb-5 ">
          <div class="bordasviradinhas">
        <div class="holdtext">
            <h5 class="mb-3"></h5>
        <h4>HC BE FRESH DETOX SHAMPOO (250ml)</h4>
        <p>Com uma base feita para limpar o couro cabeludo da oleosidade e de qualquer outro problema, este shampoo é incrível para as suas necessidades. 
<br/><br/>O nome é o que faz: Detox limpa, de maneira refrescante e renova o cabelo. 
</p>
        </div>
        <img src="<?php bloginfo('template_url');?>/imagens/kits/Imagem3.png" alt="" class="img-fluid ">
        <h6>R$ 120,00</h6>
        
			  <div class="selecionar">
				<input type="checkbox" id="kit7" name="selecioneokit">
				<label for="kit7">
					<span class="remover"><i class="fas fa-times"></i>Remover do carrinho</span>
					<span class="acrescentar">Acrescentar ao carrinho</span>
				</label>
			</div>
			  <a class="btn primary finishgame button7" href="">Prosseguir para o Pagamento</a>
        </div>
      </div>
	   <div class="col-xl-3 col-md-6 col-12 text-center mb-md-0 mb-5 ">
          <div class="bordasviradinhas">
        <div class="holdtext">
            <h5 class="mb-3"></h5>
        <h4>BE HYDRATED SHAMPOO (250 ml)</h4>
       <p>Nosso cabelo nunca é o mesmo que nosso couro cabeludo. Com isso em mente, criamos o Shampoo Be Hydrated para ser usado na mecha de tratamento e recuperação de danos.<br/><br/>
Be Hydrated é feito para trazer nutrição e resultados perfeitos.
</p>
        </div>
        <img src="<?php bloginfo('template_url');?>/imagens/kits/Imagem4.png" alt="" class="img-fluid ">
        <h6>R$ 120,00</h6>
        
			  <div class="selecionar">
				<input type="checkbox" id="kit8" name="selecioneokit">
				<label for="kit8">
					<span class="remover"><i class="fas fa-times"></i>Remover do carrinho</span>
					<span class="acrescentar">Acrescentar ao carrinho</span>
				</label>
			</div>
			  <a class="btn primary finishgame button8" href="">Prosseguir para o Pagamento</a>
        </div>
      </div>
	   <div class="col-xl-3 col-md-6 col-12 text-center mb-md-0 mb-5 ">
          <div class="bordasviradinhas">
        <div class="holdtext">
            <h5 class="mb-3"></h5>
        <h4>BE SMOOTH CONDITIONER (250 ml)</h4>
        <p>Condicionador desenvolvido para adicionar os ativos, vitaminas, proteínas e óleos essenciais que você possa precisar. Com um bom pH, os resultados são únicos e surpreendentes.</p>
        </div>
        <img src="<?php bloginfo('template_url');?>/imagens/kits/Imagem5.jpg" alt="" class="img-fluid ">
        <h6>R$ 150,00</h6>
        
			  <div class="selecionar">
				<input type="checkbox" id="kit9" name="selecioneokit">
				<label for="kit9">
					<span class="remover"><i class="fas fa-times"></i>Remover do carrinho</span>
					<span class="acrescentar">Acrescentar ao carrinho</span>
				</label>
			</div>
			  <a class="btn primary finishgame button9" href="">Prosseguir para o Pagamento</a>
        </div>
      </div>
	  <div class="col-xl-3 col-md-6 col-12 text-center mb-md-0 mb-5 ">
          <div class="bordasviradinhas">
        <div class="holdtext">
            <h5 class="mb-3"></h5>
        <h4>HC VITAMIN (60 CP)</h4>
        <p>O polivitamínico ideal para 2 meses de tratamento, contendo 15 ingredientes selecionados através de estudos científicos com comprovação na eficácia de um tratamento via oral. Cabelos com mais volume, menos queda, crescimento acelerado e mais brilho!</p>
        </div>
        <img src="<?php bloginfo('template_url');?>/imagens/kits/Imagem1.png" alt="" class="img-fluid ">
        <h6>R$ 150,00</h6>
        
			  <div class="selecionar">
				<input type="checkbox" id="kit5" name="selecioneokit">
				<label for="kit5">
					<span class="remover"><i class="fas fa-times"></i>Remover do carrinho</span>
					<span class="acrescentar">Acrescentar ao carrinho</span>
				</label>
			</div>
			  <a class="btn primary finishgame button5" href="">Prosseguir para o Pagamento</a>
        </div>
      </div>
	   <div class="col-xl-3 col-md-6 col-12 text-center mb-md-0 mb-5 ">
          <div class="bordasviradinhas">
        <div class="holdtext">
            <h5 class="mb-3"></h5>
        <h4>HC TONIC (60 ml)</h4>
        <p>Seja para couros cabeludos com Irritação, oleosidade ou perda capilar, o tônico personalizado do Hair Concept é o seu melhor amigo para proteger ou manter a saúde do seu couro cabeludo.</p>
        </div>
        <img src="<?php bloginfo('template_url');?>/imagens/kits/Imagem2.png" alt="" class="img-fluid ">
        <h6>R$ 195,00</h6>
        
			  <div class="selecionar">
				<input type="checkbox" id="kit6" name="selecioneokit">
				<label for="kit6">
					<span class="remover"><i class="fas fa-times"></i>Remover do carrinho</span>
					<span class="acrescentar">Acrescentar ao carrinho</span>
				</label>
			</div>
			  <a class="btn primary finishgame button6" href="">Prosseguir para o Pagamento</a>
        </div>
      </div>
	  <div class="col-12">
		  
	  </div>
      
 
     
      
    <?php // endif;?>
	<div class="acrescentando">
		<h4>
			Você está acrescentando:
		</h4>	
		<p>
			<span class="kit1">RECOVERY THERAPY PACKAGE AT HOME</span>
			<span class="kit2">RECOVERY HOMECARE KIT</span>
			<span class="kit3">BASIC HOME CARE</span>
			<span class="kit4">HC THERAPY AT HOME</span>
			<span class="kit5">HC VITAMIN (60 CP)</span>
			<span class="kit6">HC TONIC (60 ml)</span>
			<span class="kit7">HC BE FRESH DETOX SHAMPOO (250 ml)</span>
			<span class="kit8">BE HYDRATED SHAMPOO (250 ml)</span>
			<span class="kit9">BE SMOOTH CONDITIONER (250 ml)</span>
			
			
			
		</p>
		<a href="" class="btn primary finishgame">Comprar Itens Selecionados!</a>
	</div>
    <div class="col-12 mx-auto py-5 text-center ">
      <p class="text-center d-block mx-auto" style="max-width: 620px;"><strong>Fique de olho!</strong> Nossos técnicos poderão entrar em contato com você para se aprofundar ainda mais na sua análise, a fim de potencializar ainda mais a sua personalização!</p>
    </div>
  </div>
</section>


<?php get_footer('3');?>
