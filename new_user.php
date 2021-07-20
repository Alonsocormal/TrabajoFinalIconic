<?php
include_once('utilities.php');
include_once('db/database_utilities.php');

if( $_POST )
{

  header('Location: clientes.php');
  //die();
  $nombres = isset( $_POST['nombres'] ) ? $_POST['nombres'] : '';
  $apellidopat = isset( $_POST['apellidopat'] ) ? $_POST['apellidopat'] : '';
  $apellidomat = isset( $_POST['apellidomat'] ) ? $_POST['apellidomat'] : '';
  $telefono = isset( $_POST['telefono'] ) ? $_POST['telefono'] : '';
  $correo = isset( $_POST['correo'] ) ? $_POST['correo'] : '';
  $password = isset( $_POST['password'] ) ? $_POST['password'] : '';

  add( $nombres, $apellidopat, $apellidomat, $telefono, $correo, $password );
  die();

}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clientes |  Iconic</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('headerc.php'); ?>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Agregar nuevo registro</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <form method="post">
              <div class="row">
                  <div class="large-12 columns">
                    <label>Nombres
                      <input type="text" name="nombres" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Apellido_pat
                      <input type="text" name="apellidopat" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Apellido_mat
                      <input type="text" name="apellidomat" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Telefono
                      <input type="text" name="telefono" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Correo
                      <input type="text" name="correo" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Contraseña
                      <input type="text" name="password" placeholder="" />
                    </label>
                  </div>
                </div>
                  <div class="large-4 columns">
                    <label>
                    <input type="submit" class="button success" value="AGREGAR" />
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footerc.php'); ?>