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
		  @if(Auth::guest())
		  <li role="presentation"><a href="/auth/login">Login</a></li>
		  @else
			  <li role="presentation"><a href="/profile/">{{Auth::user()->name}} (profile) </a></li>
			  <li role="presentation"><a href="/mails/">Mails</a></li>
		 	  <li role="presentation"><a href="/auth/logout">Logout</a></li>
		  @endif
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