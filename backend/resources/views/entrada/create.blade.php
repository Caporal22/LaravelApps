<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <header>
            <h2>Registro de entradas</h2>
        </header>
        <section class="mt-4"></section>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('entrada.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="form-group col-12 col-md-6">
                    <label for="titulo">Titulo</label>
                    <input type="text" required class="form-control" name="titulo" placeholder="Ingrese el titulo">
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="tag">Tag</label>
                    <input type="text" required class="form-control" name="tag" placeholder="Ingrese el tag">
                </div>
                <div class="form-group col-12 col-md- 6">
                    <label for="contenido">Contenido</label>
                    <input type="text" required class="form-control" name"contenido" placeholder="Ingrese el contenido">
                </div>
                <div class="center mt-4">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>