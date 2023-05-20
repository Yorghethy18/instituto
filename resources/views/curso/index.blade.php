<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <title>Instituto</title>
  </head>
  <body>
    <div class="container mt-3 text-center">
      <h1> Gestión de Reportes - SENATI </h1>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-lx-12">
          <form action="{{route('curso.index')}}" method="get">
            <div class="col-sm-4 my-1">
              <input type="text" class="form-control" name="texto" placeholder="Ingresar texto a buscar" value="{{$texto}}">
            </div>
            <div class="col-auto my-2">
              <div class="d-flex flex-row">
                <input type="submit" class="btn btn-secondary mr-2" value="Buscar">
                <a href="{{route('curso.create')}}" class="btn btn-success" style="margin-left: 10px;">Nuevo</a>
              </div>
            </div>
            
            </div>
          </form>
        </div>






        <div class="row">
          <div class="col-lx-12">
            <table class="table table-striped">
            <thead>
              <tr>
                <th>Opciones</th>
                <th>ID</th>
                <th>Código Curso</th>
                <th>Nombre Curso</th>
                <th>Créditos</th>
                <th>Horas</th>
                <th>Nombre Docente</th>
              </tr>
            </thead>
            <tbody>
              @if(count($cursos)<=0)
              <tr>
                <td colspan="4">No hay resultados</td>
              </tr>
              @else

              @foreach($cursos as $curso)
              <tr>
                <td><a href="{{route('curso.edit',$curso->id)}}" class="btn btn-dark">Editar</a>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$curso->id}}">Eliminar</button>
                </td>
                <td>{{$curso->id}}</td>
                <td>{{$curso->codigo_curso}}</td>
                <td>{{$curso->nombre_curso}}</td>
                <td>{{$curso->creditos}}</td>
                <td>{{$curso->horas}}</td>
                <td>{{$curso->nombre_docente}}</td>
              </tr>
              @include('curso.delete')
              @endforeach 
              @endif
              
            </tbody>
            </table>
            {{$cursos->links()}}

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