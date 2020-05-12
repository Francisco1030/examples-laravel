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
      <form class="col s12" action="{{ route('posts.createPost') }}" method="POST">
        @csrf
        <div class="row">
          <div class="input-field col s12">
            <input id="title" name="title" type="text" class="validate">
            <label for="title">Title</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input id="subtitle" name="subtitle" type="text" class="validate">
            <label for="subtitle">Sub-Title</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input id="content" name="content" type="text" class="validate">
            <label for="content">Conteudo</label>
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

