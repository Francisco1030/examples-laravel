<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <table>
      <thead>
        <tr>
            <th>#ID</th>  
            <th>Name</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
      </thead>

      @foreach ($users as $user)
      <tbody>
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
        </tr>
      </tbody>
      @endforeach
    </table>

    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
      