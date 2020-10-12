<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f0f0f0;
		};

	</style>
<body class="pb-4">
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			$database = [
				[
					"number" => "Рим",
					"text" => "1. Колизей
							   2. Пантеон 
							   3. Фонтан Треви 
							   4. Пьяцца Навона 
							   5. Сикстинская Капелла",
					"img" => "img/1.jpg",
					"human" => "sannikovayta"
				],
				[
					"number" => "Мадрид",
					"text" => "1. Пласа-майор 
							   2. Музей Прадо 
							   3. Королевский дворец
							   4. Парк дель Ретиро
							   5. Пуэрта-дель-Соль",
					"img" => "img/2.jpg",
					"human" => "sannikovayta"
				],
				[
					"number" => "Афины",
					"text" => "1. Афинский Акрополь 
							   2. Парфенон 
							   3. Олимпийский храм Зевса 
							   4. Площадь Синтагма 
							   5. Афинская Агора",
					"img" => "img/3.jpg",
					"human" => "sannikovayta"
				],
				[
					"number" => "Берлин",
					"text" => "1. Бранденбургские ворота 
							   2. Рейхстаг 
							   3. Остров Музеумс 
							   4. Александерплац
							   5. Берлинский кафедральный собор",
					"img" => "img/4.jpg",
					"human" => "sannikovayta"
				],
				[
					"number" => "Лиссабон",
					"text" => "1. Торри-ди-Белен
							   2. Жеронимуш 
							   3. Замок Св. Георгия 
							   4. Площадь Коммерции
							   5. Кришту Рей",
					"img" => "img/5.jpg",
					"human" => "sannikovayta"
				],
				[
					"number" => $_GET["namePost"],
					"text" => $_GET["textarea"],
					"img" => $_GET["img1"],
					"human" => $_GET["author"]
				],
			];
		 ?>
	</div>
    <?php  
        $connect = mysqli_connect("127.0.0.1","root","","myFirstDB");

        if ($connect == false) {
        	echo "Связь не установлена";
        } else {
            echo "Связь установлена";
        };
        $text_query = "SELECT * FROM posts";
        $query = mysqli_query($connect,$text_query);
        if ($query == false) {
        	echo " Запроса нет";
        } else {
            echo " Запрос есть";
        };
    ?>
	<div class="col-7 mx-auto pt-3 pb-3" style="margin-top: 50px; background-color: white; border-radius: 12px; " class="shadow-sm p-3 mb-5 bg-white rounded">
		<h1 style="font-size: 30px; font-family: tt norms" class="text-center">Какие города посетить в Европе?</h1>
		<hr class="mt-0">
		<h3 style="font-size: 22px; font-family: tt norms" class="text-center">Добро пожаловать, 
			<?php 
			    if ($_GET["name"] == "Айта" && $_GET["password" ] == 12345678) {
			    	echo $_GET["name"];
			    } else {
			        echo "Вы не смогли войти в свой аккаунт";
			    }
			    
		    ?>
		</h3> 
		<p class="mt-3 text-center" style="font-size: 18px; font-family: tt norms">
		    <?php
		        echo date("l dS of F Y h:i:s A"); 
		    ?>
		</p>
		<hr class="mt-0">
		<div class="col-12"> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
			    //for ($i=0; $i < 6; $i++) { 
			    	//echo "<div style='font-family: tt norms' class='p-1 mb-1'><h4>".$database[$i]["number"]."</h4></div><hr class='m-0'>";
			    	//echo "<p>".$database[$i]["text"]."</p>";
			    	//echo "<img class='w-100'src='".$database[$i]["img"]."'>";
			    	//echo c.$database[$i]["human"]."</p>";
                    
			        $result = $query->fetch_assoc();
			        $result2 = $query->fetch_assoc();
			        $result3 = $query->fetch_assoc();
			        $result4 = $query->fetch_assoc();
			        $result5 = $query->fetch_assoc();

                    echo "<div style='font-family: tt norms' class='p-1 mb-1'><h4>".$result["number"]."</h4></div><hr class='m-0'>";
                    echo "<p>".$result["text"]."</p>";
                    echo "<img class='w-100'src='".$result["img"]."'>";
                    echo "<p class='text-secondary text-right mt-2' style='font-size: 15px; font-family: tt norms'>Автор: @".$result["human"]."</p>";
                    ?>
                    <a href="1.php">Подробнее >></a>
                    <?php 
                    echo "<div style='font-family: tt norms' class='p-1 mb-1'><h4>".$result2["number"]."</h4></div><hr class='m-0'>";
                    echo "<p>".$result2["text"]."</p>";
                    echo "<img class='w-100'src='".$result2["img"]."'>";
                    echo "<p class='text-secondary text-right mt-2' style='font-size: 15px; font-family: tt norms'>Автор: @".$result2["human"]."</p>";
                    ?>
                    <a href="2.php">Подробнее >></a>
                    <?php 
                    echo "<div style='font-family: tt norms' class='p-1 mb-1'><h4>".$result3["number"]."</h4></div><hr class='m-0'>";
                    echo "<p>".$result3["text"]."</p>";
                    echo "<img class='w-100'src='".$result3["img"]."'>";
                    echo "<p class='text-secondary text-right mt-2' style='font-size: 15px; font-family: tt norms'>Автор: @".$result3["human"]."</p>";
                    ?>
                    <a href="3.php">Подробнее >></a>
                    <?php 
                    echo "<div style='font-family: tt norms' class='p-1 mb-1'><h4>".$result4["number"]."</h4></div><hr class='m-0'>";
                    echo "<p>".$result4["text"]."</p>";
                    echo "<img class='w-100'src='".$result4["img"]."'>";
                    echo "<p class='text-secondary text-right mt-2' style='font-size: 15px; font-family: tt norms'>Автор: @".$result4["human"]."</p>";
                    ?>
                    <a href="4.php">Подробнее >></a>
                    <?php 
                    echo "<div style='font-family: tt norms' class='p-1 mb-1'><h4>".$result5["number"]."</h4></div><hr class='m-0'>";
                    echo "<p>".$result5["text"]."</p>";
                    echo "<img class='w-100'src='".$result5["img"]."'>";
                    echo "<p class='text-secondary text-right mt-2' style='font-size: 15px; font-family: tt norms'>Автор: @".$result5["human"]."</p>";
			        ?>
                    <a href="5.php">Подробнее >></a>
                    <?php 
				
			 ?>
		</div>
	</div>
</body>
</html>