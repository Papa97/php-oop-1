
<?php 
require_once __DIR__ . '/classes/movie.php';

$movies = [
    $soldato_ryan = new Movie('Salvate il soldato Ryan', 1998 , 'English','USA'),
    $lone_survivor = new Movie('Lone Survivor', 2013 , 'English','USA'),
    
];  
$soldato_ryan->setGenere(['War','Real Story']);
$soldato_ryan->setDurata(169);
$soldato_ryan->setBudget(50.00);

$lone_survivor->setGenere('War');
$lone_survivor->setDurata(121);
$lone_survivor->setBudget(15.00);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($movies as $movie){?>
        <h2><?php echo $movie->getNomeAnno(); ?></h2>
        <ul>
            <li>Duration: <?php echo "{$movie->getDurata()} Min"; ?></li>
            <li>Budget: $<?php echo "{$movie->getBudget()}"; ?> mln</li>
            <li>Original Language: <?php echo "{$movie->getLingua()}"; ?></li>
            <li>Country: <?php echo "{$movie->getNazione()}"; ?></li>
        </ul>
    <?php } ?>
</body>
</html>