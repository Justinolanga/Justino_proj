<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clima</title>
</head>
<body>
    <h1>Dados do Clima</h1>

    @if(isset($error))
        <p>{{ $error }}</p>
    @else
        <p><strong>Cidade:</strong> {{ $weather['name'] }}</p>
        <p><strong>Temperatura:</strong> {{ $weather['main']['temp'] }}°C</p>
        <p><strong>Clima:</strong> {{ $weather['weather'][0]['description'] }}</p>
        <p><strong>Humidade:</strong> {{ $weather['main']['humidity'] }}%</p>
        <p><strong>Velocidade do Vento:</strong> {{ $weather['wind']['speed'] }} km/h</p>
    @endif
</body>
</html>
