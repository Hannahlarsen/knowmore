<html>
<head>
	<title>This is my app</title>

	{!! HTML::style('css/bootstrap.css') !!}

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

	@include('flash::message')

	@yield('content')

	</div>

	@yield('footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   
     {!! HTML::script('js/bootstrap.js') !!}

     <script>

     $('#flash-overlay-modal').modal();

     $('div.alert').not('.alert-important').delay(3000).slideUp();

     </script>

</body>


</html>