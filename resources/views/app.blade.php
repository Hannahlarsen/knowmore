<html>
<head>
	<title>This is my app</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

</head>
<body>

<div class="container">

	<header>
		<ul class="nav nav-pills">
		  <li role="presentation"><a href="/">Homepage</a></li>
		  <li role="presentation"><a href="/news/">News</a></li>
		  <li role="presentation"><a href="/projects/">Projects</a></li>
		  <li role="presentation"><a href="/advisors/">Advisors</a></li>
		  <li role="presentation"><a href="/users/">Users</a></li>
		  <li role="presentation"><a href="/ability/">Ability</a></li>
		  <li role="presentation"><a href="/profile/">My profile</a></li>
		  <li role="presentation"><a href="/mails/">Mails</a></li>
		</ul>
	</header>
</div>

	<div class="container">

	@yield('content')

	</div>

	@yield('footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
	</script>

</body>


</html>