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

    <h1>ciao</h1>
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
                <h5>Ritardo: {{ $train->onTime }}</h5>
                <h5>Stato: {{ $train->cancelled }}</h5>
            </li>
        @endforeach
    </ul>
</body>

</html>
