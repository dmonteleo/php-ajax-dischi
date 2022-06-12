<?php 

require_once __DIR__ . '/../data/db.php';
// var_dump($database);

// 1. se non viene passato il genere stampo tutto il db 
// 2. se viene passato il genere filtro il db in base al genere 
// 3. per evitare che si possa verificare il caso in cui venga chiamato un genere non presente l'API invia oltre agli album anche un array di generi 

$albums = empty($_GET['genre']) || $_GET['genre'] === 'all' ? $database : [];
if (count($albums) === 0) {
  foreach ($database as $album) {
    if ($album['genre'] === $_GET['genre']) {
      $albums[] = $album;
    }
  }
}

var_dump($albums);

?>