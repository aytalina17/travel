<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h2 style="font-size: 30px; font-family: tt norms" class="text-center">Регистрация</h2>
<div class="mx-auto col-3 mt-5">
	<form action="index.php" method="GET">	
		<div class="col-12">
			<p>Имя:</p>
		    <input type="" name="name" class="mx-auto" style="width: 100%">	
		</div>
		<div class="col-12 mt-3">	
			<p>Пароль:</p>
			<input type="" name="password" class="mx-auto" style="width: 100%">
		</div>
		<button class="bg-primary text-center p-1 mt-4" style="position: absolute; left: 28%">Зарегистрироваться</button>
	</form>
	<?php 	
		echo $_GET["name"];
		echo $_GET["password"];
    ?>
</div>

