@extends('layouts.app')

@section('content')

    <h2>All Albums</h2>

    <p>
        <a href="{{ route('albums.create') }}" class="add-button">
            + Add New Album
        </a>
    </p>

    {{-- Success message --}}
    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    {{-- Search and genre filter --}}
    <form action="{{ route('albums.index') }}" method="GET" class="search-form">

        <input
            type="text"
            name="search"
            placeholder="Search by title or artist..."
            value="{{ request('search') }}"
        >

        <select name="genre">
            <option value="">All Genres</option>
            <option value="Pop" {{ request('genre') == 'Pop' ? 'selected' : '' }}>Pop</option>
            <option value="Rock" {{ request('genre') == 'Rock' ? 'selected' : '' }}>Rock</option>
            <option value="R&B" {{ request('genre') == 'R&B' ? 'selected' : '' }}>R&B</option>
            <option value="Soul" {{ request('genre') == 'Soul' ? 'selected' : '' }}>Soul</option>
            <option value="Electronic" {{ request('genre') == 'Electronic' ? 'selected' : '' }}>Electronic</option>
            <option value="Hip-Hop" {{ request('genre') == 'Hip-Hop' ? 'selected' : '' }}>Hip-Hop</option>
            <option value="Jazz" {{ request('genre') == 'Jazz' ? 'selected' : '' }}>Jazz</option>
        </select>

        <button type="submit">Search / Filter</button>

        <a href="{{ route('albums.index') }}">Clear</a>

    </form>

    {{-- Albums table --}}
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Genre</th>
                <th>Release Year</th>
                <th>Tracks</th>
                <th>Duration (minutes)</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($albums as $album)

                @include('albums.partials.album-row', ['album' => $album])

            @empty

                <tr>
                    <td colspan="7">No albums found.</td>
                </tr>

            @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}
    {{ $albums->links() }}

@endsection
