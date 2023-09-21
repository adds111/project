<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <form action="handler.php" method="get">
            <div id="box">
                
            <label for="requset" class="form-label mt-3">Введите свои пожелания к внешенему виду сайта</label>
            <input type="text" name="request" class="form-control mb-3" id="request" aria-describedby="description" >
            <div class="form-text mb-3" id="description">Вводите словесное описание чем точнее вы опишете тем лучше будет результат, к примеру: я хочу сайт в красных цветах с шапкой и подвалом и резкими формами, в качестве основного контента используй рандомно сгенерированный текст</div>
            <input type="submit" class="btn btn-secondary mb-3">
           </div>
           <?php

$connect = mysqli_connect("localhost", "root", "1133", "code");

mysqli_query($connect,"delete from response where `response`.`id`=1");
mysqli_query($connect, "alter table response AUTO_INCREMENT = 0;");


?>
        </form>
    </body>
</html>
<style>
    body{
        background-color: #f8f2eb ;
    }
#box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    
}

 

</style>







