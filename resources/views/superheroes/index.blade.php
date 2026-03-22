<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
   {{-- <p> {{ $superheroes }} </p>--}}

    <h1>All Superheroes</h1>

    <br>

    <a href="{{ route('superheroes.create') }}">Create Superhero</a>

    <br><br> 

    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Real Name</th>
            <th>Gender</th>
            <th>Universe</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($superheroes as $superheroe)
            <tr>
                <td>{{ $superheroe->id }}</td>
                <td>{{ $superheroe->name }}</td>
                <td>{{ $superheroe->real_name }}</td>
                <td>{{ $superheroe->gender }}</td>
                <td>{{ $superheroe->universe->universe ?? '' }}</td> 
                <td>
                    <a href="{{ route('superheroes.show', $superheroe->id) }}">Ver detalles</a>
                </td>
                <tr>

        @endforeach
    </tbody>
</table>
</body>
</html>