<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>  
        
    </head>
    <body>
        <h1>{{ $universes->universes }}</h1>
        <table>

            <tbody>
                    <tr>
                        <th>Company</th>
                        <td>{{ $universes->Company }}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>{{ $universes->age }}</td>
                    </tr>
            </tbody>
        </table>
        <br>
        <a href="{{ route('universes.edit', $universes->id) }}">Editar universo</a>
        <br>
        <a href="{{ route('universes.index') }}">Volver a la lista de universos</a>
        <form action = " {{ route('universes.destroy', $universes->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Delete universo</button>
        </form>
    </body>
</html>