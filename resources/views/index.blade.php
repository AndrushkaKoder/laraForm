<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	@vite('resources/sass/app.scss')
	<title>Test case</title>
</head>
<body>

<div class="container">
	<div class="row my-5">
		<div class="col-12 text-center my-3">
			<h1>Тестовая форма</h1>
		</div>
		<div class="col-xl-4 col-md-8 col-sm-12 m-auto">
			@include('form.form')
		</div>
	</div>
</div>

</body>
</html>
