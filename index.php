<?php 
require_once __DIR__ . '/classes/movies.php';

$movies = [
    [
        'title' => 'Lion la strada verso casa',
        'genre' => 'Drammatico',
        'year' => '2016'
    ],
    [
        'title' => 'A spasso con Bob',
        'genre' => 'Drammatico/Commedia',
        'year' => '2016'
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
   <h1>Film</h1>    
   
   <?php foreach ($movies as $key => $movie){
       $film = new Movie($movie['title'], $movie['genre'],$movie['year']);?>
      
   <h3> <?php echo $film->getTitle() ?></h3>
   <h4> <?php echo $film->genre ?></h4>
   <h4> <?php echo $film->year ?></h4>
   <?php } ?>
 
</body>
</html>