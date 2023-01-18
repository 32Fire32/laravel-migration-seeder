<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <ul class="row">
            @foreach ($trains as $train)
                <li class="card col-md-3 p-3">
                    <h5><Strong>Azienda:</Strong> {{ $train->agency }}</h5>
                    <h5><Strong>Stazione di partenza:</Strong> {{ $train->departure_station }}</h5>
                    <h5><Strong>Stazione di arrivo:</Strong> {{ $train->arrival_station }}</h5>
                    <h5><Strong>Giorno di partenza: </Strong> {{ $train->departure_day }}</h5>
                    <h5><Strong>Giorno di arrivo:</Strong> {{ $train->arrival_day }}</h5>
                    <h5><Strong>Orario di partenza: </Strong> {{ $train->departure_time }}</h5>
                    <h5><Strong>Orario di arrivo:</Strong> {{ $train->arrival_time }}</h5>
                    <h5><Strong>Numero del treno: </Strong>{{ $train->train_code }}</h5>
                    <h5><Strong>Numero della carrozza: </Strong>{{ $train->train_carriage_number }}</h5>
                    {{-- <h5>Ritardo: {{ $train->onTime }}</h5> --}}

                    @if ($train->onTime === 1)
                        <h5><Strong>Stato:</Strong> In Orario</h5>
                    @else
                        <h5><Strong>Stato:</Strong> In Ritardo</h5>
                    @endif

                    @if ($train->cancelled === 0)
                        <h5><Strong>Cancellato:</Strong> No</h5>
                    @else
                        <h5><Strong>Cancellato:</Strong> Si</h5>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>

</body>

</html>
