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

	<form action="{{ route('layer.store') }}" method="POST">
		<div class="col-sm-6 form-group">
			<label for ="Name">Name:</label>
			<div class=col-sm-6>
				<input class="form-control" name="Name" type=text></input>
		    	</div>
		</div>
		
		<div class="form-group">
		</div>
		
		<button class="btn btn-primary" type=submit>Submit</button>
	</form>

</div>
</body>
</html>
