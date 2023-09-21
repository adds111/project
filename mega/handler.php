
<?php



$request = $_GET["request"]; 


$connect = mysqli_connect("localhost", "root", "1133", "code");

mysqli_query($connect,"delete from response where `response`.`id`=1");
mysqli_query($connect, "alter table response AUTO_INCREMENT = 0;");


putenv('PATH=C:\Users\11\AppData\Local\Programs\Python\Python39\python.exe:$PATH'); 


mysqli_query($connect, "insert into `response`(`front`) values('Пожалуйста, сгенерируйте код без комментариев,$request используй min-height: 100vh')");

$cmd = "C:\\Users\\11\\AppData\\Local\\Programs\\Python\\Python39\\python.exe D:\\OSPanel\\domains\\mega\\par.py 2>&1";
$output = shell_exec($cmd);



$response = mysqli_query($connect, "select `response`.`back` from `response`");
$code = mysqli_fetch_all($response);
echo $code[0][0];



?>