<?php

include_once('config.php');
// include_once('test.php');
// include_once('delete.php');


$data = '';

if(file_exists('books.json')){
    $json = file_get_contents('books.json');
    $data = json_decode($json,true);
}else{
    $data = array();
}

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
                
                <?php foreach ($data as $key => $obj) : ?>
                    
                    <tr class="table-row">
                        <td>
                            <?php echo ($key+1);?>
                        </td>
                        <td class="table-item">
                            <a>
                                <?php echo $obj['title']; ?>
                            </a>
                        </td>
                        <td class="table-item"><?php echo $obj['author']; ?></td>
                        <td class="table-item"><?php echo $obj['available'] ? 'True' : 'False'; ?></td>
                        <td class="table-item"><?php echo $obj['isbn']; ?></td>
                        <td>
                            <a href="<?php echo 'delete.php?'.'id='. ($key+1); ?>" >
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