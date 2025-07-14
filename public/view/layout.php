<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/css/style.css"/>
	<title>{{ title in layout }}</title>
</head>
<body>
<header>
<div  class="p-3 text-center">
	<h3>
		Практика на движок в PHP
	</h3>
	<h4>
		Реализуйте доску объявлений. Пользователь заходит на сайт, выбирает рубрику и размещает в ней свое объявление.
	</h4>
</div>
</header>
<main>
	{{ content in layout }}
</main>
<footer>
	<div class="p-3 text-center">
	&copy; foxtail25 2025
	</div>
</footer>
</body>
</html>