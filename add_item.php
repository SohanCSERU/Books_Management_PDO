<?php
$text = '';

if (file_exists('books.json')) {
    $json = file_get_contents('books.json');
    $text = json_decode($json, true);
} else {
    $text = array();
}


if (isset($_GET['title'])) {
    $data = array(
        // 'id' => $_GET['id'],
        'title' => htmlspecialchars($_GET['title']),
        'author' => $_GET['author'],
        'available' => $_GET['available'] === "true",
        'isbn' => $_GET['isbn']
    );

    array_push($text, $data);

    $text_enc = json_encode($text);
    file_put_contents('books.json', $text_enc);

    header('Location: index.php');
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Books</title>
    <link rel="stylesheet" type="text/css" href="/" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body class="create-body">

    <div>
        <h2 class="text-center">Provide information About Book</h2>
    </div>

    <br>
    <br>

    <div class="container"> 
        <div style="justify-content:center;">
            <a href="index.php" class="" >
                <button class="btn btn-primary    ">HOME</button>
            </a>    
        </div>   
        

        <form action="" method="get">   
            
                <!-- <div class="form-group ">
                    <label for="ID">ID</label>
                    <input type="" class="form-control" name="id" placeholder="Books ID">
                </div> -->

              <div class="form-group ">
                <label for="title">Books Title</label>
                <input type="" class="form-control" name="title" placeholder="title">
              </div>

              <div class="form-group">
                <label for="author">Author</label>
                <input type="author" class="form-control" name="author" placeholder="author">
              </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Available">Available</label>
                    <input type="bool" class="form-control" name="available" placeholder="Available">
                </div>

                <div class="form-group col-md-6">
                     <label for="ISBN">ISBN </label>
                    <input type="number" class="form-control" name="isbn" placeholder="ISBN">
                </div>
            </div>
            <button type="submit" class="btn btn-white">Submit</button>
            <!-- <div class="col-auto my-1">
               
            </div> -->
        </form>
    </div> 

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
     integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>

</html>
