<?php
    // Get all the matches from the file
    $fileContents = '';
    if(file_exists('backup_books.json')){
        $fileContents = file_get_contents('backup_books.json');
    }
    else{
        $fileContents = array();
    }


    $exits_content = '';
    if(file_exists('books.json')){
        $exits_content = file_get_contents('books.json');
    }
    else{
        $exits_content = array();
    }


    if($exits_content !== $fileContents){
        file_put_contents("books.json", $fileContents);        
    }
     header('Location: index.php');
?>