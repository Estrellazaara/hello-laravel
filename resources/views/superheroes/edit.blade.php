<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

    <h1>Edit Superhero</h1>

    <form action="{{ route('superheroes.update', $superheroe->id) }}" method="POST">
        @csrf
        @method('patch')

        <label>Superheroe name:</label>
        <input type="text" name="name" value="{{ $superheroe->name }}" />
        <br><br>

        <label>Superheroe real_name:</label>
        <input type="text" name="real_name" value="{{ $superheroe->real_name }}" />
        <br><br>

        <label>Superheroe gender:</label>
        <select name="gender">
            <option value="Male" @selected($superheroe->gender === 'Male')>Male</option>
            <option value="Female" @selected($superheroe->gender === 'Female')>Female</option>
        </select>
        <br><br>

        <label>Superheroe universe:</label>
        <input type="text" name="universe_id" value="{{ $superheroe->universe_id }}" />
        <br><br>


        <input type="submit" value="Edit Superhero" />

    </form>

</body>
</html>