<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabla de proyectos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
	</br>

	<div class="p-5 text-center bg-body-tertiary"><h1>Proyectos</h1></br>
	<a href="{{route('proyecto.create')}}" class="btn btn-info" style="color: white;">Crear nuevo proyecto</a>
	</div>
	
	<table class="table align-middle text-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($proyectos as $proyecto)
    <tr>
      <td>{{$proyecto->id}}</td>
      <td>{{$proyecto->nombre}}</td>
      <td>{{$proyecto->descripcion}}</td>
      <td>
      	<a href = "{{ route('proyecto.show', $proyecto->id) }}" class="btn btn-info">Mostrar</a>
      	<a href = "{{ route('proyecto.edit', $proyecto->id) }}" class="btn btn-success" style="margin-right: 5px;color: white;"> Editar </a>
      	<form action="{{ route('proyecto.destroy', $proyecto->id) }}" method="post" style="display:inline;">
      		@csrf
      		@method('DELETE')
      		<button type="submit" class="btn btn-danger">Borrar</button>
      	</form>
      </td>
    </tr>
    @endforeach
	</tbody>
	</table>
  </body>
  </html>