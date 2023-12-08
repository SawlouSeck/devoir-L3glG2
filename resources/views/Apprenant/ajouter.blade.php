<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AJOUTER UN APPRENANT </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row align-items-start">
          <div class="col">
            <h1>AJOUTER UN APPRENANT</h1>
            <hr>
            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>

            @endif

                <ul>
                    @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{$error}}</li>
                    @endforeach
                </ul>
                <form action="/ajouter/traitement" method="POST" class="form-group">
                    @csrf
                <div class="form-group">
                  <label for="Nom" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="Nom">
                </div>

                <div class="form-group">
                    <label for="Prenom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="prenom">
                </div>

                <div class="form-group">
                        <label for="Class" class="form-label">Classe</label>
                        <input type="text" class="form-control" id="class">
                </div>
                <div >

                </div>
                <tr><button type="submit" class="btn btn-info">Ajouter</button>
                <a  href="/apprenant" class="btn btn-danger">Retourner a la liste des apprenant</a>
                </tr>
            </form>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
