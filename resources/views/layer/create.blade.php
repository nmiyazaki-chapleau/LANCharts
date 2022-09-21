<!DOCTYPE HTML>
<html>

<head>
	<title>Layer App</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
	<div class="container">

		<h1>Create a layer</h1>

		<!-- if there are creation errors, they will show here -->
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

		<div class="container text-center justify-content-center">
			<form class="row" action="{{ route('layer.store') }}" method="POST">
                @csrf
				<div class="row my-2 form-group">
					<label class="col-sm-1 col-form-label" for="Name">Name</label>
					<div class=col-sm-4>
						<input class="form-control" name="Name" type=text placeholder="Entrez un nom"></input>
					</div>
				</div>
				<div class="row my-2 form-group">
					<label class="col-sm-1 col-form-label" for="Position">Position</label>
					<div class=col-sm-4>
						<input class="form-control" name="Position" type=text placeholder="Entrez la position"></input>
					</div>
				</div>

				<button class="col-sm-3 btn btn-primary" type=submit>Submit</button>
			</form>
		</div>

	</div>
</body>

</html>
