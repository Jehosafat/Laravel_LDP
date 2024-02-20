<!doctype html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear nuevo proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>
    <form action="{{ route('proyecto.store') }}" method="post">
      @csrf
      @method('POST')
      <div class="container text-center">
        <div class="row">
          <div class="col"></div>
          <div class="col-6"></div>
          <div class="col"></div>
        </div>

        <div class="row">
          <div class="col"></div>
          <div class="col-5">
            <div class="form-group">
              </br></br></br>
              <h1>Crear nuevo proyecto
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16">
                  <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
                  <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                </svg>
              </h1> 

              <label for="exampleFormControlInput">Nombre:</label> 
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Descripción:</label>
              <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Agregar</button>
            </div>
          </div>
          <div class="col"></div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </form>
  </body>
  </html>