<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi formulario!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Gestor de Proyectos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="{{ url('proyectos') }}">Proyectos</a>
            <a class="nav-link" href="{{ route('proyectos.create') }}">Crear Proyecto</a>
            <a class="nav-link" href="{{ route('proyectos.edit', ['proyecto' => 1]) }}">Editar Proyecto</a>
          </div>
        </div>
      </div>
    </nav>


    <div class="container py-5">
        <form class="row g-3 justify-content-center" action="{{ route('proyectos.store') }}" method="POST">
            @csrf
            <div class="col-12 col-md-6">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
                    <input type="text" name="nombre" class="form-control" aria-label="Titulo" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="input-group input-group-lg mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Descripcion</span>
                    <input type="text" name="descripcion" class="form-control" aria-label="Descripcion" aria-describedby="inputGroup-sizing-lg">
                </div>
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>

    