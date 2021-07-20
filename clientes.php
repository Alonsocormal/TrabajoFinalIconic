<?php
include_once('utilities.php');
include_once('db/database_utilities.php');
$result = run_query();

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
        <h3>Manejo de la tabla de Clientes</h3>
          <p>Listado de Clientes</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
                <a href="./new_user.php" class="button tiny success">Nuevo</a>
              </div>
              <table>
                <thead>
                  <tr>
                    <th width="200">ID</th>
                    <th>Nombres</th>
                    <th width="150">Apellido_pat</th>
                    <th width="350">Apellido_mat</th>
                    <th width="350">Telefono</th>
                    <th width="350">Correo</th>
                    <th width="350">Contraseña</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  while($user = $result->fetch_assoc())
                  {
                  ?>
                  <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['nombres']; ?></td>
                    <td><?php echo $user['apellidopat']; ?></td>
                    <td><?php echo $user['apellidomat']; ?></td>
                    <td><?php echo $user['telefono']; ?></td>
                    <td><?php echo $user['correo']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                    <td>
                      <a href="./details.php?id=<?php echo $user['id']; ?>" class="button tiny secondary">Detalles</a>
                      <a href="./delete.php?id=<?php echo $user['id']; ?>" class="button tiny alert">Eliminar</a>
                    </td>
                    
                  </tr>
                  <?php
                }
                  ?>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footerc.php'); ?>