<?php 
include'include/functions.php';
include'include/database.php';
?>

<?php 
	if (is_numeric(!$post_id)){ exit(); } //если в $post_id попало не число, то остановить скрипт
	include_once'header.php' 
	?>



	<?php
	$post_id = $_GET['post_id'];  //достаем id поста с глобального массива GET
	$post = get_post_id($post_id);
	?>

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<div class="containet-fluid">
		<div class="row">
			<div class="col-md-3">
				<?php include'sidebar_1.php'; ?>
			</div>
			<div class="col-md-6">
				<div class="post_content">
					<h2><?=$post['title']; ?></h2>
					<img src="<?=$post['img'];?>" alt="post_img">
					<p><?=$post['text']; ?></p>
				</div>
			</div>
			<div class="col-md-3">
				<?php include'sidebar.php'; ?>
			</div>
		</div>
	</div>





<?php include_once'footer.php' ?>		<!-- подключение подвала -->