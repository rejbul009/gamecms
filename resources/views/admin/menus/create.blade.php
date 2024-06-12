<h2>Add Menu</h2>
    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="parent_id">Parent Menu:</label>
        <select name="parent_id" id="parent_id">
            <option value="">None</option>
            @foreach($menus as $parentMenu)
                <option value="{{ $parentMenu->id }}">{{ $parentMenu->name }}</option>
            @endforeach
        </select>

        <button type="submit">Add</button>
    </form>
