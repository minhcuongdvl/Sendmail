<?php 
if(isset($_POST['content'])){
	
$data = $_POST['content'];
};

$file = fopen("../data/text.txt",'w+');
 
 
fwrite($file,$data);

?>