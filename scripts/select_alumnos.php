<?php include "../templates/header.php"; ?>
<?php

    $config = include 'config_DB.php';

    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
      
      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
      $resultado = $conexion->query("SELECT * FROM alumnos");
      echo '<a class="btn btn-primary" href="../templates/form_ingresar_alumnos.php">INGRESAR NUEVO ALUMNO</a>';
      echo '<table class="table table-striped custom-table display" id="tabla">
                        <thead>
                            <tr>
                                <th scope="col">id del Alumno</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Nota</th>
                            </tr>
                        </thead>
                        <tbody>';
                           while ($row = $resultado->fetch()) {
                                  echo '<tr scope="row">';
                                  echo '<td>'.$row['id'].'</td>';
                                  echo '<td>'.$row['nombre'].'</td>';
                                  echo '<td>'.$row['dni'].'</td>';
                                  echo '<td>'.$row['nota'].'</td></tr>';
                           }
                       echo  '</tbody></table>';
    }catch(PDOException $error) {
      echo $error->getMessage();
    }
  
  ?>

  
<form method="post">
  <button type="submit" name="Volver" class="btn btn-primary">Volver al menú de inicio</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['Volver'])) {
    header("Location: ../templates/home.php"); 
    exit;
  } 
}
?>

<?php include "../templates/footer.php"; ?>