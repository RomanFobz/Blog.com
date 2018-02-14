<!-- левое меню -->
<div class="col-md-3">
	<ul>

		<?php $categories = get_categories(); ?>  <!--в переменную $categories передаем массив с категориями -->

		<?php if(count($categories) === 0): ?> <!-- если в переменной $categories 0 записей -->
			<li><a href="#">Добавить категорию</a></li> <!-- то вывести Добавить категорию -->
		<?php else: ?> <!-- в ином случае -->

			<?php foreach ($categories as $category): ?> <!-- проходим цыклом по категориям -->
				<li><a href="/category.php?id=<?=$category['id']?>"><?=$category['title'];?></a></li> <!-- в href перенаправляем в файл category.php и присваеваем каждой категории свой id c БД .  И с массива выводим поле title-->
			<?php endforeach; ?> <!-- закрываем цыкл (с точкой-запятой)-->

		<?php endif; ?> <!-- закрываем условие (с точкой-запятой)-->

	</ul>
</div>
<!-- левое меню end-->