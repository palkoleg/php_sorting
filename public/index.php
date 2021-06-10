<!DOCTYPE html>
<html lang="uk">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Практика Палки Олега </title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">


    <link href="css/resume.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Індивідуальне завдання Палки Олега</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/me.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Про мене</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#sort">Виконане сортування</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Олег
            <span class="text-primary">Палка</span>
          </h1>
          <div class="subheading mb-4">+380982328654  
            <a href="mailto:poleg1997@gmail.com">poleg1997@gmail.com</a>
          </div>
          <p class="mb-0">На даний момент я навчаюсь на 4 курсі Тернопільського національного технічного університету імені Івана Пулюя. Спеціальність - "Комп'ютерні науки".</p>
		  <p class="mb-3"><i><b>Під час виконання індивідуального завдання переддипломної практики мною реалізовані такі алгоритми сортування елементів у двовимірному масиві:</b></i></p>
          <ul class="fa-ul mb-6">
            <li>
              <i class="fa-li fa fa-check"></i>
              Горизонтальне сортування</li>
            <li>
              <i class="fa-li fa fa-check"></i>
             Вертикальне сортування</li>
			 <li>
              <i class="fa-li fa fa-check"></i>
             Сортування равликом</li>
            <li>
              <i class="fa-li fa fa-check"></i>
             Сортування зворотнім равликом</li>
			 <li>
              <i class="fa-li fa fa-check"></i>
             Сортування змійкою</li>
			 <li>
              <i class="fa-li fa fa-check"></i>
             Діагональне сортування</li>
          </ul>
		  <ul class="list-inline list-social-icons mb-3" align = center>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/oleg.palka.27">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://plus.google.com/101193427841905406433?hl=uk">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-google fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/oleg-palka-5b346a120/">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://gitlab.com/poleg1997">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-gitlab fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="sort">
        <div class="my-auto">
		
		
		<div align = "center">
	
	<form role="form" name="f1" method="post" action="index.php#sort">
		<div class="form-group">
		<b>Введіть кількість рядків матриці:</b> <br/>
		<input name="rows" type="number" size="25" maxlength="30" value="<?=isset($_POST['rows'])?$_POST['rows']:''?>" min = "2"/> <br/>
		</div>
		<div class="form-group">
		<b>Введіть кількість стовпців матриці:</b> <br />
		<input name="columns" type="number" size="25" maxlength="30" value="<?=isset($_POST['columns'])?$_POST['columns']:''?>" min = "2"/> <br/>
		</div>
		<div class="form-group">		
		<b>Оберіть, які числа генерувати:</b> <br/>
		<select name="generate" value="<?=isset($_POST['generate'])?$_POST['generate']:''?>">
			<option value="1">Будь-які числа без повторень</option>
			<option value="2">Лише прості числа без повторень</option>
		</select><br/>
		</div>
		<div class="form-group">
		<input type="submit" class = "btn btn-primary" name="enter"  value="Згенерувати та відсортувати" />
		</div>
	</form>
	<?php
	
	$rows = $_POST['rows'];
	$columns = $_POST['columns'];
	$generate = $_POST['generate'];
	
	if (!empty($rows) && !empty($columns))
	{
		if ($rows > 0 && $columns > 0)
		{
		require 'resources/views/processing.php';
		}
		else
		{
		echo '<h3 style="color:red">Введіть коректні дані! Спробуйте ще раз!<h3>';
		}
	}
	?>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/resume.min.js"></script>

  </body>
</html>
