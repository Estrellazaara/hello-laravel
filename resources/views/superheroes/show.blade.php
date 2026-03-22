<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>  
        
    </head>
    <body>
        <h1>{{ $superheroe->superheroe }}</h1>
        <table>

            <tbody>
                    <tr>
                        <th>Company</th>
                        <td>{{ $superheroe->name }}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>{{ $superheroe->real_name }}</td>
                    </tr>
            </tbody>
        </table>
        <br>
        <a href="{{ route('superheroes.edit', $superheroe->id) }}">Editar superhéroe</a>
        <br>
        <a href="{{ route('superheroes.index') }}">Volver a la lista de superhéroes</a>
        <form action = " {{ route('superheroes.destroy', $superheroe->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Delete superheroe</button>
        </form>
    </body>
</html>