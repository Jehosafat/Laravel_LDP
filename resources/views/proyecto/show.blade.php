<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Información de proyecto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<main class="container">
	<br/><br/>
<div class="card text-center">
  <div class="card-header">
    <h5 class="card-title">Información</h5>
  </div>

  <div class="card-body">
    
    <ul class="list-group justify-content-center">
  <li class="list-group-item ">
    <div class="ms-2 me-auto">
      <div class="fw-bold">ID</div>
      {{ $proyecto->id }}
    </div>
  </li>
  <li class="list-group-item">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Nombre</div>
      {{ $proyecto->nombre }}
    </div>
  </li>
  <li class="list-group-item">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Descripción</div>
      {{ $proyecto->descripcion }}
    </div>
  </li>
  <li class="list-group-item">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Creado</div>
      {{ $proyecto->created_at }}
    </div>
  </li>
  <li class="list-group-item">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Modificado</div>
      {{ $proyecto->updated_at }}
    </div>
  </li>
</ol>
    
  </div>
  <div class="card-footer text-body-secondary">
    <a href="{{ route('proyecto.index') }}" class="btn btn-primary">Atrás</a>
  </div>
</div>
</main>
</html>