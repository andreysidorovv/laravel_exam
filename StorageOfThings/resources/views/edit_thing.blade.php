<form action="/update_thing/{{ $thing->id }}" method="post">
    @csrf
    @method('put')
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $thing->name }}" required><br>

    <label for="description">Description:</label>
    <input type="text" name="description" value="{{ $thing->description }}"><br>

    <label for="wrnt">Warranty/Expiry:</label>
    <input type="text" name="wrnt" value="{{ $thing->wrnt }}"><br>

    <label for="master">Master:</label>
    <input type="text" name="master" value="{{ $thing->master }}" required><br>

    <button type="submit">Update Thing</button>
</form>