<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <a class="btn btn-primary btn-block m-5 mb-1" href="/">Regresar</a>

    <div class="card m-5 p-2">
        <div class="card-head">
            <h1>Crear reservasiones</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('reservation.create') }}">
                @csrf
                <input type="text" name="document" placeholder="Numero de documento" class="form-control mb-2" />
                <input type="text" name="numberPeople" placeholder="Numero de personas" class="form-control mb-2" />
                <input type="text" name="nightNumber" placeholder="Numero de noches" class="form-control mb-2" />
                <input type="date" name="initialDate" placeholder="Fecha de inicio" class="form-control mb-2" />
                <input type="date" name="finishDate" placeholder="Fecha de fin" class="form-control mb-2" />
                <select type="text" name="id_bedroom" class="form-select mb-2" aria-label="Default select example">
                    <option selected>Seleccione una habitación</option>
                    @foreach ($Bedrooms as $item)
                        <option value="{{ $item->id }}">Habitacion # {{ $item->numberBedroom }} - # de camas:
                            {{ $item->numberBeds }}</option>
                    @endforeach
                </select>
                <input type="number" name="price"  placeholder="Cantidad total" class="form-control mb-2"/>
                <button class="btn btn-success btn-block" type="submit">Agregar</button>
            </form>
        </div>
    </div>

    <div class="card m-5">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"># Documento</th>
                        <th scope="col"># Personas</th>
                        <th scope="col"># Noches</th>
                        <th scope="col"># Fecha entrada</th>
                        <th scope="col"># Fecha salida</th>
                        <th scope="col"># precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Reservations as $item)
                        <tr>
                            <td>{{ $item->document }}</td>
                            <td>{{ $item->numberPeople }}</td>
                            <td>{{ $item->nightNumber }}</td>
                            <td>{{ $item->initialDate }}</td>
                            <td>{{ $item->finishDate }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <form action="{{ route('reservation.delete', $item) }}" class="d-inline"
                                    method="POST">
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
