<form action="/update_place/{{ $place->id }}" method="post">
    @csrf
    @method('put')
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $place->name }}" required><br>

    <label for="description">Description:</label>
    <input type="text" name="description" value="{{ $place->description }}"><br>

    <label for="repair">Repair:</label>
    <input type="checkbox" name="repair" {{ $place->repair ? 'checked' : '' }}><br>

    <label for="work">In Work:</label>
    <input type="checkbox" name="work" {{ $place->work ? 'checked' : '' }}><br>

    <button type="submit">Update Place</button>
</form>