<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Modificar Paciente</title>
  </head>
  <body>
    <div class="container"></div>
    <h1>Modificar Paciente</h1>
    <form action="{{ route('paciente.update',$pacientes->id) }}" method="POST">
        @csrf
        @method("PUT")
  <div class="mb-3">
    <label for="id" class="form-label">Codigo</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id"  required value ="{{$pacientes->id}}">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" ria-describedby="nameHelp" name="name" required value ="{{$pacientes->name}}">
  </div>
  <div class="mb-3">
    <label for="doctor" class="form-label">Doctor</label>
    <input type="text" class="form-control" id="doctor" ria-describedby="doctorHelp" name="doctor" required value ="{{$pacientes->doctor}}">
  </div>
  <div class="mb-3">
    <label for="fecha" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="fecha" ria-describedby="fehcaHelp" name="fecha" required value ="{{$pacientes->fecha}}">
  </div>
  <br>
  <button class="btn btn-primary">Guardar</button>
  <a href="{{ route('paciente.index') }}">Regresar</a>
  
   </form>
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