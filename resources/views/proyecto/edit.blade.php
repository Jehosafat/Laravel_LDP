<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar proyecto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<main class="container">
<form action="{{ route('proyecto.update', $proyecto->id) }}" method="post">
	@csrf
	@method('PUT')
	<br/>
	<br/>
	<div class="p-5 text-center bg-body-tertiary">
		<h1>Editar proyecto</h1>
	</div>
	<br/>
	<div class="input-group mb-3">
  		<span class="input-group-text" id="basic-addon1">Nombre</span>
  		<input type="text" class="form-control" id="nombre" name="nombre" value="{{ $proyecto->nombre }}"required>
	</div>

	<div class="input-group">
  		<span class="input-group-text">Descripción</span>
  		<textarea class="form-control" aria-label="With textarea" id="descripcion" name="descripcion">{{ $proyecto->descripcion }}</textarea>
  	</div>
  	<br/>
  	<button class="btn btn-primary" type="submit"> Update </button>
</form>
</main>
</html>



