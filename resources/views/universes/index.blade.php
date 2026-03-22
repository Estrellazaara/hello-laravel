<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
   {{-- <p> {{ $universes }} </p>--}}

   <h1>All Universes</h1>

   <br>

    <a href="{{ route('universes.create') }}">Create Universe</a>

    <br><br> 

    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Company</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($universes as $universe)
            <tr>
                <td>{{ $universe->id }}</td>
                <td>{{ $universe->universe}}</td>
                <td>{{ $universe->company }}</td>
                <td>
                    <a href="{{ route('universes.show', $universe->id) }}">Ver detalles</a>
                </td>
            </tr>
             @endforeach
        </tbody>
    </body>
</html>