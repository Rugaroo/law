<?php 
	require 'db.php';

	$data = $_POST;

	function captcha_show(){
		$questions = array(
			1 => 'Столица России',
			2 => 'Столица США',
			3 => '2 + 3',
			4 => '15 + 14',
			5 => '45 - 10',
			6 => '33 - 3'
		);
		$num = mt_rand( 1, count($questions) );
		$_SESSION['captcha'] = $num;
		echo $questions[$num];
	}

	//если кликнули на button
	if ( isset($data['do_signup']) )
	{
    // проверка формы на пустоту полей
		$errors = array();
		if ( trim($data['login']) == '' )
		{
			$errors[] = 'Введите логин';
		}

		if ( trim($data['email']) == '' )
		{
			$errors[] = 'Введите Email';
		}

		if ( $data['password'] == '' )
		{
			$errors[] = 'Введите пароль';
		}

		if ( $data['password_2'] != $data['password'] )
		{
			$errors[] = 'Повторный пароль введен не верно!';
		}

		//проверка на существование одинакового логина
		if ( R::count('users', "login = ?", array($data['login'])) > 0)
		{
			$errors[] = 'Пользователь с таким логином уже существует!';
		}
    
    //проверка на существование одинакового email
		if ( R::count('users', "email = ?", array($data['email'])) > 0)
		{
			$errors[] = 'Пользователь с таким Email уже существует!';
		}

		//проверка капчи
		$answers = array(
			1 => 'москва',
			2 => 'вашингтон',
			3 => '5',
			4 => '29',
			5 => '35',
			6 => '30'
		);
		if ( $_SESSION['captcha'] != array_search( mb_strtolower($_POST['captcha']), $answers ) )
		{
			$errors[] = 'Ответ на вопрос указан не верно!';
		}


		if ( empty($errors) )
		{
			//ошибок нет, теперь регистрируем
			$user = R::dispense('users');
			$user->login = $data['login'];
			$user->email = $data['email'];
			$user->password = password_hash($data['password'], PASSWORD_DEFAULT); //пароль нельзя хранить в открытом виде, мы его шифруем при помощи функции password_hash для php > 5.6
			R::store($user);
			echo '<div style="color:dreen;">Вы успешно зарегистрированы!</div><hr>';
		}else
		{
			echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
		}

	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <title>Арс Банкрот - авторизация</title>
</head>

<body>
  
  <main>
    <section class="signup">
      <div class="container">
          <h2 class="section-heading">Регистрация</h2>
      <form action="/signup.php" method="POST">
	<strong>Ваш логин</strong>
	<input type="text" name="login" value="<?php echo @$data['login']; ?>"><br/>

	<strong>Email</strong>
	<input type="email" name="email" value="<?php echo @$data['email']; ?>"><br/>

	<strong>Пароль</strong>
	<input type="password" name="password" value="<?php echo @$data['password']; ?>"><br/>

	<strong>Повторите пароль</strong>
	<input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>"><br/>

	<strong><?php captcha_show(); ?></strong>
	<input type="text" name="captcha" ><br/>

	<button class="auth-btn" type="submit" name="do_signup">Зарегистрироваться</button>
</form>
      </div>

    </section>
  </main>
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>