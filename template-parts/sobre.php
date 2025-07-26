<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WebForce Solutions</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sobre.css">
</head>
<body>
    <main>
        <section id="sobre">
            <div id="container-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nos.jpg" alt="">
            </div>
            <div id="container-sobre">
                <h1>Sobre nós</h1>
                <p><?php the_field('campo_sobre'); ?></p>
            </div>
        </section>
    </main>
</body>
</html>