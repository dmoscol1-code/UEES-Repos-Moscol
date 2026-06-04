<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyectos</title>
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
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Proyectos</h1>
        <a href="{{ route('proyectos.create') }}" class="btn btn-primary">Nuevo</a>
        
      </div>

      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Título</th>
              <th>Descripción</th>
              <th>Creado</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @forelse($proyectos as $proyecto)
              <tr>
                <td>{{ $proyecto->id }}</td>
                <td>{{ $proyecto->nombre }}</td>
                <td>{{ $proyecto->descripcion }}</td>
                <td>{{ optional($proyecto->created_at)->format('Y-m-d H:i') ?? '-' }}</td>
                <td>
                  <div class="d-flex gap-2">
                    <a href="{{ route('proyectos.edit', $proyecto->id) }}"
                      class="btn btn-sm btn-info">
                      Editar
                    </a>

                    <form action="{{ route('proyectos.destroy', $proyecto->id) }}"
                          method="POST"
                          class="d-inline-block"
                          onsubmit="return confirm('¿Deseas eliminar este proyecto?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">
                        Eliminar
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="text-center">No hay proyectos registrados.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
