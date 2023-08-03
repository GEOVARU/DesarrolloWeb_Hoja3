<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Solicitud de Pasaporte</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
    <h1>Formulario de Solicitud de Pasaporte</h1>
    <form id="passportForm">
      <div class="mb-3">
        <label for="fullName" class="form-label">Nombre Completo:</label>
        <input type="text" class="form-control" id="fullName" required>
      </div>
      <div class="mb-3">
        <label for="passportNumber" class="form-label">Número de Pasaporte:</label>
        <input type="text" class="form-control" id="passportNumber" required>
      </div>
      <div class="mb-3">
        <label for="dob" class="form-label">Fecha de Nacimiento:</label>
        <input type="date" class="form-control" id="dob" required>
      </div>
      <div class="mb-3">
        <label for="nationality" class="form-label">Nacionalidad:</label>
        <input type="text" class="form-control" id="nationality" required>
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Dirección:</label>
        <textarea class="form-control" id="address" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
    </form>
    <div class="mt-5">
      <h2>Área de Resultados</h2>
      <p id="result"></p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>
