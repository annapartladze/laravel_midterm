<tr>
    <td>{{ $album->title }}</td>
    <td>{{ $album->artist }}</td>
    <td>{{ $album->genre }}</td>
    <td>{{ $album->release_year }}</td>
    <td>{{ $album->track_count }}</td>
    <td>{{ $album->duration_minutes }}</td>

    <td>
        <a href="{{ route('albums.edit', $album) }}">Edit</a>

        <form
            action="{{ route('albums.destroy', $album) }}"
            method="POST"
            style="display:inline;"
        >
            @csrf
            @method('DELETE')

            <button
                type="submit"
                onclick="return confirm('Are you sure you want to delete this album?')"
            >
                Delete
            </button>
        </form>
    </td>
</tr>
