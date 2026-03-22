<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

    <h1>Edit Universe</h1>

    <form action="{{ route('universes.update', $universe->id) }}" method="POST">
        @csrf
        @method('patch')

        <label>Universe name:</label>
        <input type="text" name="universe" value="{{ $universe->universe }}" />
        <br><br>

        <label>Company:</label>
        <select name="company">
            <option value="DC" @selected( $universe->company === 'DC')>DC</option>
            <option value ="Marvel" @selected ( $universe->company === 'Marvel' )>Marvel</option>
        </select>
        <br><br>

        <label>Age:</label>
        <input type="text" name="age" value="{{ $universe->age }}" />
        <br><br>

        <input type="submit" value="Edit Universe" />

    </form>

</body>
</html>