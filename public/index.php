<?php

require __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/database.php';

if(isset($_POST['voornaam'])) {
  $voornaam = $_POST['voornaam'];

$stmt = $pdo->prepare("
INSERT INTO users (voornaam) VALUES (:voornaam)");
$stmt->bindParam(':voornaam', $voornaam, PDO::PARAM_STR);
$stmt->execute();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intranet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <div class="mb-3">
            <label for="voornaam" class="form-label">voornaam</label>
            <input type="text" class="form-control" id="voornaam" name="voornaam" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
      </div><!-- .col -->
    </div><!-- .row -->
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>