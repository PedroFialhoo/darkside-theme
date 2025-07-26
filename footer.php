<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WebForce Solutions</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">
</head>
<body>
  <footer> 
    <?php
      $email     = get_field('email');
      $telefone  = get_field('telefone');
      $whatsapp  = get_field('whatsapp');
      $instagram = get_field('instagram');
      $linkedin  = get_field('linkedin');
    ?>

    <div class="contatos">
      <h2>Contato</h2>
      <?php if ($email): ?>
        <h3>Email</h3>
        <p><?php echo esc_html($email); ?></p>
      <?php endif; ?>

      <?php if ($telefone): ?>
        <h3>Telefone</h3>
        <p><?php echo esc_html(formatar_telefone($telefone)); ?></p>
      <?php endif; ?>

      <?php if ($whatsapp): ?>
        <h3>WhatsApp</h3>
        <p><?php echo esc_html(formatar_whatsapp($whatsapp)); ?></p>
      <?php endif; ?>
    </div>

    <div class="redes-sociais">
      <h2>Redes Sociais</h2>
      <?php if ($instagram): ?>
        <h3>Instagram</h3>
        <p><a href="<?php echo esc_url($instagram); ?>" target="_blank"><?php echo esc_html($instagram); ?></a></p>
      <?php endif; ?>

      <?php if ($linkedin): ?>
        <h3>LinkedIn</h3>
        <p><a href="<?php echo esc_url($linkedin); ?>" target="_blank"><?php echo esc_html($linkedin); ?></a></p>
      <?php endif; ?>
    </div>

	<div id="logo-footer">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WebForce.png" alt="Logo do site" id="img-logo" />
	</div>
  </footer>
</body>
</html>
