

<?php
  $books = json_decode(file_get_contents('books.json'), true);
  

    $book = array_search($_GET['title'], array_column( $books, 'title' ) );
    if( $book == false )
      $books[] = array(
        "title" => $_GET['title'],
        "author" => $_GET['author'],
        "available" => $_GET['available'],
        "isbn" => $_GET['isbn']);

      file_put_contents('books.json', json_encode($books));
      echo 'Book is Inserted Successfully.';

?>

 <!DOCTYPE html>
<html>
        <head>
            <meta charset="UTF-8">
            <title>Add Books</title>
            <link rel="stylesheet" type="text/css" href="/CSS/design.css" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        </head>   
    <body>
    <br>
    <br>

    <div class="container">    
        <form>
            
              <div class="form-group ">
                <label for="title">Books Title</label>
                <input type="" class="form-control" id="title" placeholder="title">
              </div>

              <div class="form-group">
                <label for="author">Author</label>
                <input type="author" class="form-control" id="author" placeholder="author">
              </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Available">Available</label>
                    <input type="bool" class="form-control" id="available" placeholder="Available">
                </div>

                <div class="form-group col-md-6">
                     <label for="ISBN">ISBN </label>
                    <input type="number" class="form-control" id="isbn" placeholder="ISBN">
                </div>
            </div>
        </form>
        <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>   

    </body>
</html>
<?php

?>


