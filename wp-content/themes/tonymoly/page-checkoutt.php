<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>

<!-- Formulario -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h3 class="stiletos10"><i class="fa fa-truck" style="color: #fff; background: #ec4b1d; border-radius: 20px; padding: 0.8rem 0.8rem;"></i> Direccion de Envio</h3>
        <p class="separacion-general05">Elige una direccion de Envio a Domicilio</p>

        <div class="col-md-6 tamaño-grande">
          <form>
            <div class="form-group">
              <label for="">Nombre</label>
              <input type="" class="form-control" id="" aria-describedby="" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="">Telefono Celular</label>
              <input type="" class="form-control" id="" aria-describedby="" placeholder="Telefono Celular">
            </div>
            <div class="form-group">
              <label for="">Direccion</label>
              <input type="" class="form-control" id="" aria-describedby="" placeholder="Direccion">
            </div>

            <div class="dropdown">
              <label for="">Departamento</label>
              <button class="btn btn-default dropdown-toggle boton-check" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Seleccione un Departamento
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Prueba</a></li>
                <li><a href="#">Prueba</a></li>
                <li><a href="#">Prueba</a></li>
                <li><a href="#">Prueba</a></li>
              </ul>
            </div>

            <div class="form-group">
              <label for="">Instrucciones especiales (Opcional)</label>
              <input type="" class="form-control" id="" placeholder="Instrucciones">
            </div>
          </form>
        </div>

        <div class="col-md-6 tamaño-grande">
          <form>
            <div class="form-group">
              <label for="">Apellido</label>
              <input type="" class="form-control" id="" aria-describedby="" placeholder="Apellido">
            </div>
            <div class="form-group">
              <label for="">Otro Telefono (Obcional)</label>
              <input type="" class="form-control" id="" aria-describedby="" placeholder="Telefono Celular">
            </div>
            <div class="form-group">
              <label for="">Barrio</label>
              <input type="" class="form-control" id="" aria-describedby="" placeholder="Barrio">
            </div>

            <div class="dropdown">
              <label for="">Municipio</label>
              <button class="btn btn-default dropdown-toggle boton-check" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Seleccione un Municipio
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Prueba</a></li>
                <li><a href="#">Prueba</a></li>
                <li><a href="#">Prueba</a></li>
                <li><a href="#">Prueba</a></li>
              </ul>
            </div>
            <div>
              <button class="boton-formulario">Guardar Dirrecion</button>
            </div>
          </form>

          <div>

          </div>
        </div>
      </div>

      <?php get_template_part('partials/checkout/cart-summary'); ?>

      <div class="col-md-8">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle boton-check" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <div class="text-left">
              <i class="fa fa-id-card"> Metodo de Pago</i>
              <span class="caret"></span>
            </div>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Prueba</a></li>
            <li><a href="#">Prueba</a></li>
            <li><a href="#">Prueba</a></li>
            <li><a href="#">Prueba</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle boton-check" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <div class="text-left">
              <i class="fa fa-paper-plane-o"> Opciones de Envia</i>
              <span class="caret"></span>
            </div>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Prueba</a></li>
            <li><a href="#">Prueba</a></li>
            <li><a href="#">Prueba</a></li>
            <li><a href="#">Prueba</a></li>
          </ul>
        </div>
        <div>
        </div>
      </div>
    </div>
  </section>
  <!-- Formulario -->
  <!-- Archivo de pié global de Wordpress -->
  <?php get_footer(); ?>
