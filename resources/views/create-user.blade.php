<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    
    <div class="container">
    <div class="row">
      <form class="col s12" action="{{ route('users.storeUser') }}" method="POST">
        @csrf
        <div class="row">
          <div class="input-field col s12">
            <input id="name" name="name" type="text" class="validate">
            <label for="name">Name</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" name="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" name="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
    
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>

      </form>
    </div>
  </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>

