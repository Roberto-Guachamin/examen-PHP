<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Ingresar alumno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  </head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h2 class="mt-4">ALTA ALUMNO</h2>
      <h4 class="mt-4">Por favor, ingresa la información del alumno y su nota de examen</h4>
      <hr>
      <form method="post" action="../scripts/ingresar_alumnos.php">
        <div class="form-group">
          <label for="nombre">Nombre del alumno</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
          <label for="dni">DNI del alumno</label>
          <input type="text" name="dni" id="dni" class="form-control">
        </div>
        <div class="form-group">
          <label for="nota">Nota de examen</label>
          <input type="number" name="nota" id="nota" class="form-control">
        </div>
        
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary" value="Guardar">
        </div>
      </form>
    </div>
  </div>
</div>

<form method="post">
  <button type="submit" name="Volver" class="btn btn-primary">Atrás</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['Volver'])) {
    header("Location: ../scripts/select_alumnos.php"); 
    exit;
  } 
}
?>
