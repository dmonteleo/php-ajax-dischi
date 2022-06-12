<?php
  require_once __DIR__ . '/data/db.php';
  // var_dump($database);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles/style.css">
  <title>php ajax dischi</title>
</head>
<body>

  <header class="d-flex justify-content-between ps-3 pe-3">
    <div>
      <img src="img/spotify-logo.png" alt="Spotify">
    </div>
    <div>

    </div>
  </header>
  
  <main class="container mt-5">
    <div class="d-flex flex-wrap">

      <?php foreach($database as $album): ?>
      <div class="disc p-3 text-center">
        <div class="p-3">
          <img class="img-fluid mb-3" src="<?php echo $album['poster'] ?>" alt="">
          <h3><?php echo $album['title'] ?></h3>
          <h4><?php echo $album['author'] ?></h4>
          <h5><?php echo $album['year'] ?></h5>
        </div>
      </div>
      <?php endforeach; ?>
      
    </div>
  </main>
</body>
</html>