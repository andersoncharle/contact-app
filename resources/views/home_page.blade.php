<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'ANDERSON') }}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div id="app">
        <x-navigation></x-navigation>
        <h1>home page</h1>
        <main>
            @include('contact')

            @foreach ($data as $item)
                <h3>{{ $item }}</h3>
            @endforeach

            {{-- @csrf used to generate token especially in a form --}}

            {{-- ddd($users) --}}

        </main>

        <script>
            var data = @json($data);
            console.warn(data);
            data.forEach(items => document.querySelector('h1').innerText = items);
        </script>

    </div>
</body>

</html>
