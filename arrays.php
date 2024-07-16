<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php 
            $books = [
                "Do Androids dream of sheep",
                "Hail Mary",
                "Concise Theology",

            ];
        ?>

        <p>  <?= "Calling an Array by it's index number: " . $books[1];?></p>
        
        <h3>Displaying the contents of an Array</h3>
        <ul>
           <?php foreach ($books as $book) : ?>
                <li> <?= $book?> </li>
            
            <?php endforeach; ?>
           
        </ul>
</body>
</html>