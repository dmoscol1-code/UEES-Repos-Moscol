<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container py-5">
        <form class="row g-3 justify-content-center" action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-12 col-md-6">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-titulo">Titulo</span>
                    <input type="text" name="nombre" class="form-control" value="{{ $proyecto->nombre }}" aria-label="Titulo" aria-describedby="inputGroup-sizing-titulo">
                </div>
                @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 col-md-6">
                <div class="input-group input-group-lg mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Descripcion</span>
                    <textarea name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" aria-describedby="inputGroup-sizing-lg">{{ old('descripcion', $proyecto->descripcion) }}</textarea>
                </div>
                @error('descripcion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>

    