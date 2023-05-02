<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>My First App</title>
</head>

<body>
<form method ="POST" action ="register.php">
  <div class="mb-3">
    <label for="identificator" class="form-label">Identificator</label>
    <input type="text" class="form-control" id="identificator" name="identificator">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="nombre" name="name">
  </div>
  <div class="mb-3">
    <label for="detail" class="form-label">Detail</label>
    <input type="text" class="form-control" id="detail" name="detail">
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</body>
</html>