<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name');?> | <?php the_title();?></title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <?php wp_head();?>
</head>
<body>
  <header class="container-fluid px-0" id="amice_header">
    <div class="container-fluid amice_blue_faixa">
      <div class="container">
      <div class="row">
        <div class="col-9 utilidade">
          <div class="row justify-content-start">
            <div class="col-2 px-0"><i class="far fa-clock me-1"></i><span>8h -- 18h</span></div>
            <div class="col-2 px-1"><i class="fas fa-phone-alt me-1"></i><span>00 1234-1234</span></div>
            <div class="col-2 px-1"><i class="fab fa-whatsapp me-1"></i><span>00 1234-1234</span></div>
            <div class="col-3 px-1"><i class="fas fa-map-marker-alt me-1"></i><span>Rua Amice, 123 - Bairro</span></div>
          </div>
        </div>
        
        <div class="col-2 ms-auto social me-0 ">
          <div class="row justify-content-between">
            <div class="col px-2"><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></div>
            <div class="col px-2"><a href="" target="_blank"><i class="fab fa-instagram"></i></a></div>
            <div class="col px-2"><a href="" target="_blank"><i class="fab fa-twitter"></i></a></div>
            <div class="col px-2"><a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></div>
          </div>
        </div>
        
      </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url');?>/images/svg/logotipo-clinica-amice.svg" class="img-fluid" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
      
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="<?php bloginfo('url');?>/">Home</a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="<?php bloginfo('url');?>/">Conheça a Amice</a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="<?php bloginfo('url');?>/">Centro de infusão</a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="<?php bloginfo('url');?>/">Especialidades</a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="<?php bloginfo('url');?>/">Convênios</a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="<?php bloginfo('url');?>/">Informativos</a>
      </li>
      <li class="nav-item button_blue">
      <a class="nav-link active" aria-current="page" href="<?php bloginfo('url');?>/"><i class="fas fa-calendar-check"></i><span>Agende sua Consulta</span></a>
      </li>
      
      </ul>
      </div>
      </div>
    </nav>

</header>