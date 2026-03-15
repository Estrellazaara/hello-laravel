<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>

<h1>Create Superheroe</h1>

<form action="{{ route('superheroes.store') }}" method="POST">
    @csrf

    <label>Name *</label>
    <input type="text" name="name" />
    <br><br>

     <label>Real Name *</label>
    <input type="text" name="real_name" />
    <br><br>

    <label>Gender *</label>
    <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <br><br>

    <select name="universe_id">
    @foreach ($universes as $universe)
        <option value="{{ $universe->id }}">
            {{ $universe->universe }}
        </option>
    @endforeach
    </select>

    <input type="submit" value="Create Superhero">
</form>

</body>
</html>