<h2>Edit Menu</h2>
    <form action="{{ route('menus.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $menu->name }}" required>

        <label for="parent_id">Parent Menu:</label>
        <select name="parent_id" id="parent_id">
            <option value="">None</option>
            @foreach($menus as $parentMenu)
                <option value="{{ $parentMenu->id }}" {{ $parentMenu->id == $menu->parent_id ? 'selected' : '' }}>
                    {{ $parentMenu->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Update</button>
    </form>