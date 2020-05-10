<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
          <td>
            <form action="{{ route('users.deleteUser', ['user' => $user->id]) }}" method="POST">
              @csrf
              @method('delete')
              <input type="hidden" name="user" value="{{ $user->id }}">
              <a class="waves-effect waves-teal btn-flat" href="{{route('users.formEditUser', ['user' => $user->id])}}">Editar</a>
              <button class="waves-effect waves-teal btn-flat" type="submit">Deletar</button>
          </form>
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
      