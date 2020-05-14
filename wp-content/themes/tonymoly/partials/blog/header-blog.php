<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>" style="margin-top: 0px !important;">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="////Esto va a depender del cliente////" name="keywords">
  <meta content="<?php bloginfo('description'); ?>" name="description">
  <?php wp_head(); ?>
</head>

<body class="container-full <?= $product = is_product() ? 'product' : 'nada';  ?>">
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="grid-blog pt-2 pb-2">
                    <a href="<?= bloginfo('url'); ?>" class="flecha"><i class="fas fa-chevron-left"></i></a>
                    <h2 class="text-center blog">Blog</h2>
                </div>
            </div>
        </div>
    </div>
</section>