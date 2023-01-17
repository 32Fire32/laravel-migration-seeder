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
    <ul>
        @foreach ($trains as $train)
            <li>
                <h5>Azienda:{{ $train->agency }}</h5>
                <h5>Stazione di partenza:{{ $train->departure_station }}</h5>
                <h5>Stazione di arrivo:{{ $train->arrival_station }}</h5>
                <h5>Orario di partenza: {{ $train->departure_time }}</h5>
                <h5>Orario di arrivo:{{ $train->arrival_time }}</h5>
                <h5>Numero del treno: {{ $train->train_code }}</h5>
                <h5>Numero della carrozza: {{ $train->train_carriage_number }}</h5>
                {{-- <h5>Ritardo: {{ $train->onTime }}</h5> --}}

                @if ($train->onTime === 1)
                    <h5>Stato: In Orario</h5>
                @else
                    <h5>Stato: In Ritardo</h5>
                @endif

                @if ($train->cancelled === 0)
                    <h5>Cancellato: No</h5>
                @else
                    <h5>Cancellato: Si</h5>
                @endif
            </li>
        @endforeach
    </ul>
</body>

</html>
