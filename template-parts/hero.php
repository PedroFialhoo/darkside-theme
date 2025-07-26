<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WebForce Solutions</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/hero.css">
</head>
<body>
    <main>
        <section id="hero">
            <div id="banner">
                <h1><?php the_field('titulo_banner'); ?></h1>
                <p><?php the_field('subtitulo_banner'); ?></p>
                <a href="#contato" class="btn"><?php the_field('texto_botao_banner'); ?></a>
            </div>
        </section>
    </main>
</body>
</html>