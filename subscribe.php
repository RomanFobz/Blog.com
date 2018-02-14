<?php 
require_once'include/database.php';
require_once'include/functions.php';

if(isset($_POST['email'])){
	$email = trim($_POST['email']); //ключ email - это береться с атрибута name в инпуте .trim - уберает пробелы вначале и вконце
	$ins_result = add_subscribe($email);

	$header = 'Location: /?subscribe=';
	$header .= $ins_result; 

	header($header);


}else{
	header('Location: /');
}






 ?>