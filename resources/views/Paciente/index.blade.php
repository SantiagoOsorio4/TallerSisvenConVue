<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de pacientes</title>
  </head>
  <body>
    <div class="container">
    <h1>Listado de Pacientes</h1>
    <a href="{{ route('paciente.create') }}" class="btn btn-success">Add</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Paciente</th>
      <th scope="col">Doctor</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
 @foreach ($pacientes as $paciente)
<tr>
  <th scope="row">{{$paciente->id}}</th>
  <td>{{$paciente->name}}</td>
  <td>{{$paciente->doctor}}</td>
  <td>{{$paciente->fecha }}</td>
</tr> 
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>