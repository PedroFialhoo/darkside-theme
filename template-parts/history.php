<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WebForce Solutions</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/history.css">
</head>
<body>
    <main>
        <section id="history">      
            <div id="left-side">
                <?php $image_id = get_field('foto'); ?>            
                <?php echo wp_get_attachment_image($image_id, 'medium', false);?>                
                <h2 id="slogan"><?php the_field('slogan'); ?></h2>
            </div>
            <div id="container-historia">
                <h1>Nossa história!</h1>
                <h2>Fundado por: <?php the_field('nome_fundador'); ?></h2>
                <h3>No dia <?php the_field('data_criacao'); ?></h3>
                <p><?php the_field('campo_historia'); ?></p>
                <a href="http://localhost/webforce_solutions">Voltar para página principal</a>
            </div>
        </section>
    </main>
</body>
</html>