<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Train</title>
</head>

<body>
    @forelse ($trains as $train)
        <div class="singolo-treno">
            <h2>
                Treno: {{ $train->train_code }}
            </h2>
            <p>
                partenza: {{ $train->departure_station }}
            </p>
            <p>
                arrivo: {{ $train->arrival_station }}
            </p>

        </div>
    @empty
        Non ci sono Treni disponibili per oggi.
    @endforelse
</body>

</html>
