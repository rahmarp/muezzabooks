<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel</title>

	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>

  <div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
			<a class="navbar-brand" href="#">MuezzaBooks</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsExample09">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{route('home')}}">Home<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Menu 1</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Menu 2</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Menu 3
						</a>
						<div class="dropdown-menu" aria-labelledby="dropdown09">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
				</ul>
				<form class="form-inline my-2 my-md-0">
					<input class="form-control" type="text" placeholder="Search" aria-label="Search">
				</form>
			</div>
		</nav>

		@yield('content')

	</div>
  
  <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>