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
<body>
    <?php
        $connect = mysqli_connect("127.0.0.1","root","","more");
        if ($connect == false) {
            echo "Связь не установлена";
        } else {
            echo "Связь установлена";
        };
        $text_query = "SELECT * FROM more";
        $query = mysqli_query($connect,$text_query);
        if ($query == false) {
            echo " Запроса нет";
        } else {
            echo " Запрос есть";
        };
    ?>

    <div class="col-10 mx-auto"> 
             <?php 
                    
                    $result = $query->fetch_assoc();
                    $result = $query->fetch_assoc();
                    $result = $query->fetch_assoc();
                    
                  
                    echo "<div style='font-family: tt norms' class='p-1 mb-1'><h4>".$result["title"]."</h4></div><hr class='m-0'>";
                    echo "<p>".$result["text"]."</p>";
                    echo "<img class='w-100'src='".$result["img"]."'>";
                    echo "<p class='text-secondary text-right mt-2' style='font-size: 15px; font-family: tt norms'>Автор: @".$result["human"]."</p>";
            ?>
                   
        </div>
</body>
</html>