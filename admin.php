<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="mx-auto col-3 mt-5 border border-secondary rounded">
	<form action="index.php" method="GET">	
		<h3 style="font-size: 30px; font-family: tt norms" class="text-center">Заголовок</h3>
		<input type="" name="namePost" class="col-12">

		<h3 style="font-size: 30px; font-family: tt norms" class="text-center">Текст поста</h3>
		<textarea type="" name="textarea" class="col-12"></textarea>

		<h3 style="font-size: 30px; font-family: tt norms" class="text-center">Автор</h3>
		<input type="" name="author" class="col-12">

		<h3 style="font-size: 30px; font-family: tt norms" class="text-center">Картинка</h3>
		<input type="" name="img1" class="col-12">

		<button class="bg-primary text-center p-1 mt-3">Создать пост</button>

	</form>
</div>
<?php 	
	echo $_GET["namePost"];
	echo $_GET["textarea"];
	echo $_GET["author"];
	echo $_GET["img1"];
?>