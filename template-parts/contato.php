<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WebForce Solutions</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/contato.css">
  <?php wp_head(); ?>
</head>
<body>
  <main>
    <section id="contato">
      <div id="banner-lateral">
        <h1>Entre em contato conosco!</h1>
      </div>
      <div id="contato-form">
        <?php echo do_shortcode('[wpforms id="51"]'); ?>
      </div>
    </section>
  </main>
  <?php wp_footer(); ?>
</body>
</html>
