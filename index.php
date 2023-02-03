<?php 
    require_once __DIR__ . '/models/Movie.php';
    require_once __DIR__ . '/models/Genres.php';

    $avatar2 = new Movie("Avatar: La Via Dell'Acqua", new Genres("Fantasy", "Sci-fi"), 2022);
    $johnWick4 = new Movie("John Wick 4", new Genres("Action", "Noir"), 2023);
    $matrix = new Movie("The Matrix", new Genres("Action", "Drama"), 1999);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP-1</title>
</head>
<body>
    <table>
        <tr>
            <th>Movie Name</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Widescreen</th>
        </tr>
        <tr>
            <td><?php echo $avatar2->title  ?></td>
            <td><?php echo $avatar2->printGenres()  ?></td>
            <td><?php echo $avatar2->year  ?></td>
            <td><?php echo $avatar2->printFormat()  ?></td>
        </tr>
        <tr>
            <td><?php echo $johnWick4->title  ?></td>
            <td><?php echo $johnWick4->printGenres()   ?></td>
            <td><?php echo $johnWick4->year  ?></td>
            <td><?php echo $johnWick4->printFormat() ?></td>
        </tr>
        <tr>
            <td><?php echo $matrix->title  ?></td>
            <td><?php echo $matrix->printGenres()  ?></td>
            <td><?php echo $matrix->year  ?></td>
            <td><?php echo $matrix->printFormat() ?></td>
        </tr>
    </table> 
</body>
</html>