<?php

// Категории
function get_categories(){ //создаем функцию для получения категорий
	global $connect; //берем глобальную переменную $connect
	$sql = "SELECT * FROM `articles_categories`"; //запрос на табл таблицу с категориями
	$result = mysqli_query($connect , $sql);  //выберает табл с категориями (вернет обьект)
	$categories = mysqli_fetch_all($result , MYSQLI_ASSOC); //преобразовывает обьект в массив
	return $categories; //возвращаем  переменную категории
 }

// Посты
function get_posts(){ 
	global $connect; 
	$sql = "SELECT * FROM `articles`";
	$result = mysqli_query($connect , $sql);
	$posts = mysqli_fetch_all($result , MYSQLI_ASSOC);
	return $posts;
}

//id постов
function get_post_id($post_id){
	global $connect ;  //берем глобальную переменную $connect
	$sql = "SELECT * FROM `articles` WHERE id =".$post_id; //запрос на  таблицу с постами где id =  $post_id
	$result = mysqli_query($connect , $sql); //выберает табл с постами (вернет обьект)
	$post = mysqli_fetch_assoc($result); //преобразовывает обьект в массив . assoc - для получения одного результата ,а row для нескольких
	return $post;
}

//U=генерация кода
function generate_code($length = 8){
	$srting = '';
	$chars = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890';
	$num_chars = strlen($chars);

	for($i = 0; $i < $length; $i++){
		$string .= substr($chars , rand(1 , $num_chars) - 1 , 1);
	}

	return $string;
}



//Занесение подписчика в базу
function add_subscribe($email){
    global $connect;
    $email = mysqli_real_escape_string($connect, $email);

    $sql = "SELECT * FROM `subscribes` WHERE email = '$email'";
    $result = mysqli_query($connect , $sql);

    if(!mysqli_num_rows($result)){
        $sub_code = generate_code();

        // echo $sub_code;

        $insert_query = "INSERT INTO `subscribes` (email , code) VALUES ('$email' , '$sub_code')";

        $result = mysqli_query($connect , $insert_query);


        if($result) {
            return 'created';
        }else{
            return 'fail';
        }
    }else{
        return 'exist';
    }

}


//получение поста категорий
function get_posts_by_category($category_id){
	global $connect;
	$category_id = mysqli_real_escape_string($connect, $category_id);
	$sql = "SELECT * FROM `articles` WHERE categories_id = "."$category_id";
	$result = mysqli_query($connect , $sql);
	$posts = mysqli_fetch_all($result , MYSQLI_ASSOC);
	return $posts;
}
