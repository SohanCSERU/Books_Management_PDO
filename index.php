<?php

$pdo = require 'connect.php';

// start working with the database
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/design.css">
    <title>Read From database</title>
</head>

    <?php
         use  Vendor\allBooks;
         require_once __DIR__.'/Vendor/stockdb.php';
         $books = allBooks();
    ?>

<body>
    <div class="flex-container" style="justify-content: end;">
        <a  href="relode.php">
            <button class="w-btn">Refresh Books</button>
        </a>
    </div>
    
    <div class="flex-container" style="justify-content: center;">
        <div>
            <h1 class="font-sel" style="text-align: center;">Given Books Data</h1>
            
            <form action="search.php" method="get">
                <input class="form-style" type="text" placeholder="Type Book Name ..." name="title" />
                <input class="src-btn" type="submit" value="Search"/>
            </form>
            <br/>
            
            
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Availablity</th>
                    <th>ISBN</th>
                </tr>
                
                <?php foreach ($books as $book) : ?>
                    
                    <tr class="table-row">
                        <td>
                            <?php echo $book['id'];?>
                        </td>
                        <td class="table-item">
                            <a>
                                <?php echo $book['title']; ?>
                            </a>
                        </td>
                        <td class="table-item"><?php echo $book['author']; ?></td>
                        <td class="table-item"><?php echo $book['availablity'] ? 'True' : 'False'; ?></td>
                        <td class="table-item"><?php echo $book['isbn']; ?></td>
                        <td>
                            <a href="<?php echo 'delete.php?'.'id='. ($book); ?>" >
                                <button class="delete-btn" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                
            </table>
            <a href="add_item.php" >
                <button class="w-btn">Add Books</button>
            </a>
        </div>
    </div>

</body>

</html>