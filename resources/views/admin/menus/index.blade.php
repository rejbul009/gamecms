<h2>Menu List</h2>
    <a href="{{ route('menus.create') }}">Add Menu</a>
    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif
    <ul>
        @foreach ($menus as $menu)
            <li>
                {{ $menu->name }}
                <a href="{{ route('menus.edit', $menu->id) }}">Edit</a>
                <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                @if ($menu->children->count())
                    <ul>
                        @foreach ($menu->children as $child)
                            <li>
                                {{ $child->name }}
                                <a href="{{ route('menus.edit', $child->id) }}">Edit</a>
                                <form action="{{ route('menus.destroy', $child->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>