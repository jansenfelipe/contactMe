<!DOCTYPE html>
<html>
<head>
    <title>ContactMe</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>

<div class="container">

    <h1>Lista de mensagens</h1>

    <hr />

    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Mensagem</th>
        </tr>
      </thead>
      <tbody>
        @foreach($contatos as $row)
        <tr>
          <th scope="row">{{ $row->id }}</th>
          <td>{{ $row->nome }}</td>
          <td>{{ $row->email }}</td>
          <td>{{ $row->mensagem }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

</div>

</body>
</html>