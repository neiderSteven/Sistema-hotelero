<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Habitaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <a class="btn btn-primary btn-block m-5 mb-1" href="/">Regresar</a>
    
    <div class="card m-5 p-2">
        <div class="card-head">
            <h1>Agregar habitaciones</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('bedroom.create') }}">
                @csrf
                <input type="text" name="numberBedroom" placeholder="Numero de habitaciones" class="form-control mb-2" />
                <input type="text" name="numberBeds" placeholder="Numero de camas" class="form-control mb-2" />
                <input type="number" name="price" placeholder="Precio" class="form-control mb-2" />
                <button class="btn btn-success btn-block" type="submit">Agregar</button>
            </form>
        </div>
    </div>

    <div class="card m-5">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"># Camas</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Bedrooms as $item)
                        <tr>
                            <td>{{ $item->numberBedroom }}</td>
                            <td>{{ $item->numberBeds }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <form action="{{ route('bedroom.delete', $item) }}" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
