<?php
include("include/db_connect.php");

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
	

	

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>F.A.N.E.M. - регистрация</title>
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/libs.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div class="reg_cont">
		<div class="container">
			<h2 class="h2-title">Регистрация</h2>
			<form method="post" id="form_reg" action="reg/reg_hendler.php">
				<p id="reg_message"></p>
				<div id="block-form-registretion">
					<ul id="form-registration">
						<li>
							<label for="">Логин</label>
							<span class="star">*</span>
							<input type="text" name="reg_login" id="reg_login">
						</li>
						<li>
							<label for="">Пароль</label>
							<span class="star">*</span>
							<input type="text" name="reg_pass" id="reg_pass">
							<span id="gen_pass">Сгенерировать</span>
						</li>
						<li>
							<label for="">Фамилия Имя Отяество</label>
							<span class="star">*</span>
							<input type="text" name="reg_fio" id="reg_fio">
						</li>
						<li>
							<label for="">E-mail</label>
							<span class="star">*</span>
							<input type="text" name="reg_email" id="reg_email">
						</li>
						<li>
							<label for="">Телефон</label>
							<span class="star">*</span>
							<input type="text" name="reg_phone" id="reg_phone">
						</li>
						<li>
							<label for="">Адрес доставки</label>
							<span class="star">*</span>
							<input type="text" name="reg_addres" id="reg_addres">
						</li>
						<li>
							<div id="block-captcha"><img src="/reg/reg_captcha" alt=""><input type="text" name="reg_captcha" id="reg_captcha">
								<p id="reload_captcha">Обновить</p></div>
						</li>
					</ul>
				</div>
				<p align="right"><input type="submit" name="reg_submit" id="form_submit" value="Регистрация"></p>
			</form>
		</div>
	</div>

    
            
	<?php
    
    include 'include/block-footer.php'
    
    
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>