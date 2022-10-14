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

    <div class="card m-5">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"># Transacción</th>
                        <th scope="col"># Documento</th>
                        <th scope="col"># Personas</th>
                        <th scope="col"># Noches</th>
                        <th scope="col"># Fecha entrada</th>
                        <th scope="col"># Fecha salida</th>
                        <th scope="col"># precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Reservations as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->document }}</td>
                            <td>{{ $item->numberPeople }}</td>
                            <td>{{ $item->nightNumber }}</td>
                            <td>{{ $item->initialDate }}</td>
                            <td>{{ $item->finishDate }}</td>
                            <td>{{ $item->price }}</td>
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