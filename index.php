<?php //Template Name: Página Inicial AMICE ?>
<?php get_header();?>
<div class="container-fluid" style="height: 686px; background: #ccc;"></div>
<div class="container texto_padrao bloco_texto_one py-5">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-6 p-5">
      <h3>Agendamento Amice</h3>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
    </div>
    <div class="col-lg-6">
      <div class="formulario_agendamento">
        <h5>Agendamento de Consulta</h5>
      </div>
    </div>
  </div>
</div>
<div class="container texto_padrao bloco_texto_two">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-6">
      <img src="<?php bloginfo('template_url');?>/images/jpg/imagem-a-amice.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-lg-6 p-5">
        <h3>A Amice</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit </p>
        <a href="" class="bnt2 button"><span>Conhecer Mais</span></a>
    </div>
  </div>
</div>
<section class="container-fluid bg-image-terapia">
  <div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h4>Centro 
de Terapia
Assistida</h4>
      
      <a href="" class="btn2 button">Saiba Mais</a>
    </div>
    <div class="col-lg-6">

    </div>
  </div>
  </div>
</section>
<section class="especialidades depoimentos container-fluid">
    <div class="container depoimentos_box">
      <h4>Depoimentos</h4>
      <p></p>
    </div>
</section>
<?php the_content();?>
<?php get_footer();?>