<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Gestión de Reportes - SENATI</title>
  </head>
  <body>
<div class="container py-4">
      <h1 class="mb-4">Ingreso de cursos</h1>
      <div class="row">
        <div class="col-lg-6">
          <form action="{{route('curso.store')}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="codigo_curso" class="form-label">Código Curso :</label>
              <input type="text" class="form-control" name="codigo_curso" maxlength="50">
            </div>
            <div class="mb-3">
              <label for="nombre_curso" class="form-label">Nombre Curso : </label>
              <input type="text" class="form-control" name="nombre_curso" maxlength="30">
            </div>
            <div class="mb-3">
              <label for="creditos" class="form-label">Créditos : </label>
              <input type="text" class="form-control" name="creditos" maxlength="30">
            </div>
            <div class="mb-3">
              <label for="horas" class="form-label">Horas : </label>
              <select class="form-control" name="horas">
                <option value="">Seleccionar horas</option>
                @for ($i = 1; $i <= 10; $i++)
                  <option value="{{ $i }}">{{ $i }}</option>
                @endfor
              </select>
            </div>
            <div class="mb-3">
              <label for="nombre_docente" class="form-label">Nombre Docente</label>
              <input type="text" class="form-control" name="nombre_docente" maxlength="50">
            </div>
            
            <div class="mb-3">
              <button type="submit" class="btn btn-success">Guardar</button>
              <a href="#" class="btn btn-dark" onclick="history.back()">Regresar al listado de cursos</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>