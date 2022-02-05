<?	
	$text = '';

	if(file_exists('books.json')){
		$json = file_get_contents('books.json');
		$text = json_decode($json,true);
	}else{
		$text = array();
	}

	$id = $_GET['id'];
	
	echo $id;

	$text = file_get_contents('books.json');
	$json = json_decode($text);
 
	unset($json[$id]);
 
	// $json = json_encode($json, JSON_PRETTY_PRINT);
	// file_put_contents('books.json', $json);

	print_r($json);

?>