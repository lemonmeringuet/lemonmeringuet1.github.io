<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<center>
	<div class="container-fluid justify-content-center col-md-12">
<h1>Sign in</h1>
<form action="" method="post">
	  <div class="form-group">
	<?php
error_reporting(0);
 include("connection.php");//Подсоединяем файл с аргументами базы
$conn1 = pg_pconnect("dbname=postgres");

$result = pg_query($conn1, "SELECT id FROM users WHERE username='$username' AND password='$password'");
if (!$result) {
  echo "Произошла ошибка.\n";
  exit;
}

if($_POST['username'] == "" OR $_POST['password'] == ""){ 
header("Location: "); //Возвращаем пользователя на форму входа, в случае если он не ввел данные входа.
} else { //Если все-же ввел, то..
 
$password = $_POST['password']; //Определение для пароля.
$username = $_POST['username']; //Определение для входа.
$pro = pg_query("SELECT id FROM users WHERE username='$username' AND password='$password'"); //Запрашиваем список пользователей с полученными данными.
$res = pg_fetch_array($pro); //Сокращаем.
if(pg_num_rows($pro) == 1){
	$_SESSION['username'] = $res['username']; //Ставим инфу сессии.
$_SESSION['password'] = $res['password']; //Ставим инфу сессии.
header("Location: tic_info.php"); //Перекидываем пользователя на индексную страницу сайта.
}else{ //Если все-же найдены пользователи с таким же логином и паролем, то..
header("Location: "); //Если пользователей не найдено, то скидываем посетителя обратно на форму входа.
}
}
?>
<input type="text" class="form-control" name="username" placeholder="Username" required><br>
<input type="password" class="form-control" name="password" placeholder="Password" required><br>
</div>
<button type="submit" class="btn btn-success">Sign in</button>
<input type="reset" value="Reset" class="btn btn-light" />
</form>
</div>
</div>
</center>
<footer>
<button class="btn btn-primary btn-lg btn-block" id="btn_info1">Back to buying tickets</button>
<script>
document.getElementById('btn_info1').onclick = function() {
    setTimeout(function() {
        window.location = 'index.php';
    }, 100);
};
</script>
</footer>
