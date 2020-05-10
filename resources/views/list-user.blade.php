<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <h3> Listagem de Usuário</h3>

    <p>Nome: {{ $user->name }} </p>
    <p>E-mail: {{ $user->email }} </p>
    <p>Data: {{ date('d/m/Y H:i', strtotime($user->created_at)) }} </p>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>

