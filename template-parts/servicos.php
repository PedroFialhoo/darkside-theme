<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WebForce Solutions</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/servicos.css">
</head>
<body>
  <main>
    <section id="servicos">

      <h1 id="text-servicos">Conheça os nossos serviços!</h1>
      <div class="servicos-conteiner">
        <div id="servico-1" class="servico-conteiner">
          <?php
            $image_id = get_field('icone_servico_1');
            if ($image_id) {
                echo wp_get_attachment_image($image_id, 'medium', false, ['class' => 'imagem-servico']);
            } else {
                echo '<img src="' . get_template_directory_uri() . '../assets/images/icon1.png" alt="Imagem padrão">';
            }
          ?>
          <h2 class="nome-servico">
            <?php echo get_field('nome_servico_1'); ?>
          </h2>
          <p class="descricao-servico">
            <?php echo get_field('descricao_servico_1'); ?>
          </p>        
        </div>

        <div id="servico-2" class="servico-conteiner">
          <?php
            $image_id = get_field('icone_servico_2');
            if ($image_id) {
                echo wp_get_attachment_image($image_id, 'medium', false, ['class' => 'imagem-servico']);
            } else {
                echo '<img src="' . get_template_directory_uri() . '../assets/images/icon2.png" alt="Imagem padrão">';
            }
          ?>
          <h2 class="nome-servico">
            <?php echo get_field('nome_servico_2'); ?>
          </h2>
          <p class="descricao-servico">
            <?php echo get_field('descricao_servico_2'); ?>
          </p>        
        </div>

        <div id="servico-3" class="servico-conteiner">
          <?php
            $image_id = get_field('icone_servico_3');
            if ($image_id) {
                echo wp_get_attachment_image($image_id, 'medium', false, ['class' => 'imagem-servico']);
            } else {
                echo '<img src="' . get_template_directory_uri() . '../assets/images/icon3.png" alt="Imagem padrão">';
            }
          ?>
          <h2 class="nome-servico">
            <?php echo get_field('nome_servico_3'); ?>
          </h2>
          <p class="descricao-servico">
            <?php echo get_field('descricao_servico_3'); ?>
          </p>
        </div>
      </div>      
    </section>
  </main>
</body>
</html>
