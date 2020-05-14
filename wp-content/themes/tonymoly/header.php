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
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div class="">
    
    <div class="pos-f-t">
      <nav class="navbar navbar-dark bg-dark">
        <div class="grid-menu">
          <div class="grid-link"> 
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          </div>
          <div class="grid-link">
            <div class="t-center">
              <img src="https://tonymolycolombia.com/wp-content/uploads/2019/02/logo-tony.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="grid-link">
            <div class="text-center">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-search"></span>
              </button>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-shopping-cart"></span>
              </button>
            </div>
          </div>
        </div>
      </nav>
      <div class="top-bar">
          <div style="background: #f75b75;padding: 10px 0;">
            <p style="text-align: center;font-size: 1.2rem;letter-spacing: 0px;margin-bottom: 0 !important;"><span style="color: #ffffff"><strong>Registrate y obtén un 10% de descuento</strong></span> <span style="color: #ffffff"><strong>en tu primera compra</strong></span></p>
          </div>
        </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light d-none">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>

      </nav>
  </div>
</div>