<!DOCTYPE>
<html>
    <p>Code Does not Run Properly!</p>
<html/>

<?php
    $book_id = $_GET['id'];

// $numbers_db = '["0","1","2","3"]';
// echo $book_id;

    $text = '';

	if(file_exists('books.json')){
		$json = file_get_contents('books.json');
		$text = json_decode($json,true);
	}else{
		$text = array();
	}

//$numbers= json_decode($numbers_db,true); //json decode numbers ar
// $numbers = json_decode($numbers_db,true);

foreach($text as $key => $obj){
    // if($obj['id']==$book_id){
        if($key+1==$book_id){
            unset($text[$key]);
    }
}

$after_delete = json_encode($text);
file_put_contents("books.json", $after_delete);

header('Location: index.php');
?>

