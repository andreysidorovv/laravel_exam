<!DOCTYPE html>
<html>
<head>
    <title>Storage App</title>
</head>
<body>
<h1>Things</h1>
<ul>
    @foreach($things as $thing)
        <li>
            {{ $thing->name }} - {{ $thing->description }} - {{ $thing->wrnt }} - {{ $thing->master }}
            <form action="/delete_thing/{{ $thing->id }}" method="post" style="display: inline;">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
            <a href="/edit_thing/{{ $thing->id }}">Edit</a>
        </li>
    @endforeach
</ul>

<!-- Вывод мест хранения -->
<h1>Places</h1>
<ul>
    @foreach($places as $place)
        <li>
            {{ $place->name }} - {{ $place->description }} - @if($place->repair) Repair @endif - @if($place->work) In Work @endif
            <form action="/delete_place/{{ $place->id }}" method="post" style="display: inline;">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
            <a href="/edit_place/{{ $place->id }}">Edit</a>
        </li>
    @endforeach
</ul>

    <h2>Add Thing</h2>
    <form action="/add_thing" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="description">Description:</label>
        <input type="text" name="description"><br>

        <label for="wrnt">Warranty/Expiry:</label>
        <input type="text" name="wrnt"><br>

        <label for="master">Master:</label>
        <input type="text" name="master" required><br>

        <button type="submit">Add Thing</button>
    </form>

    <h2>Add Place</h2>
    <form action="/add_place" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="description">Description:</label>
        <input type="text" name="description"><br>

        <label for="repair">Repair:</label>
        <input type="checkbox" name="repair"><br>

        <label for="work">In Work:</label>
        <input type="checkbox" name="work"><br>

        <button type="submit">Add Place</button>
    </form>
</body>
</html>
