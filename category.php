<?php 
	include'include/database.php';
	include'include/functions.php';
?>

<?php include_once'header.php' ?>  <!-- подключение шапки -->

<?php include'sidebar_1.php'; ?>


<!-- Новости -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">

			<?php 
				$category_id = $_GET['id'];
				$posts = get_posts_by_category($category_id); //передаем в переменную массив с постами 
			?>

			<?php foreach($posts as $post) :?> <!-- проходим цыклом по массиву и записываем рез-тат в переменную $post -->

				<article>
					<header>
						<h1><a href="/post.php?post_id=<?=$post['id']?>"><?=$post['title']?></a></h1>	<!-- все что в href после вопросительного знака - это GET параметры (в GET п-тр передвем ключ id из массива $post)-->
						<a href="/post.php?post_id=<?=$post['id']?>">
							<img src="<?=$post['img']?>" alt="название"> <!-- из массива выводим картинку -->
						</a>
					</header>
					<p><?= mb_substr($post['text'] , 0 , 310 , 'UTF-8').'...' ?></p> <!-- из массива выводим содержание поста и с помощю mb_substr() обрезаем пост -->
					<ul>
						<li><a href="#"><i class="glyphicon glyphicon-ok"></i>Категория</a></li>
						<li><i class="glyphicon glyphicon-dashboard"></i><?=$post['pubdate']?></li>
						<li><i class="glyphicon glyphicon-briefcase"></i>Коментарии</li>
						<li><i class="glyphicon glyphicon-send"></i><?=$post['views']?></li>
					</ul>
				</article> 

			<?php endforeach ;?> <!-- закрытие цыкла foreach -->

		</div>
		<div class="col-md-3">
			<?php 
				include_once'sidebar.php';
			 ?>
		</div>
	</div>
</div>
<!-- новости end-->



<?php include_once'footer.php' ?> <!-- подключение подвала -->
<?php 
	include'include/database.php';
	include'include/functions.php';
?>

<?php include_once'header.php' ?>  <!-- подключение шапки -->

<?php include'sidebar_1.php'; ?>


<!-- Новости -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">

			<?php 
				$category_id = $_GET['id'];
				$posts = get_posts_by_category($category_id);
			?>

			<?php $posts = get_posts(); ?> <!-- передаем в переменную массив с постами -->

			<?php foreach($posts as $post) :?> <!-- проходим цыклом по массиву и записываем рез-тат в переменную $post -->

				<article>
					<header>
						<h1><a href="/post.php?post_id=<?=$post['id']?>"><?=$post['title']?></a></h1>	<!-- все что в href после вопросительного знака - это GET параметры (в GET п-тр передвем ключ id из массива $post)-->
						<a href="/post.php?post_id=<?=$post['id']?>">
							<img src="<?=$post['img']?>" alt="название"> <!-- из массива выводим картинку -->
						</a>
					</header>
					<p><?= mb_substr($post['text'] , 0 , 310 , 'UTF-8').'...' ?></p> <!-- из массива выводим содержание поста и с помощю mb_substr() обрезаем пост -->
					<ul>
						<li><a href="#"><i class="glyphicon glyphicon-ok"></i>Категория</a></li>
						<li><i class="glyphicon glyphicon-dashboard"></i><?=$post['pubdate']?></li>
						<li><i class="glyphicon glyphicon-briefcase"></i>Коментарии</li>
						<li><i class="glyphicon glyphicon-send"></i><?=$post['views']?></li>
					</ul>
				</article> 

			<?php endforeach ;?> <!-- закрытие цыкла foreach -->

		</div>
		<div class="col-md-3">
			<?php 
				include_once'sidebar.php';
			 ?>
		</div>
	</div>
</div>
<!-- новости end-->



<?php include_once'footer.php' ?> <!-- подключение подвала -->
