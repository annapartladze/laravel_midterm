@extends('layouts.app')

@section('content')

    <h2>Edit Album</h2>

    {{-- Display validation errors --}}
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('albums.update', $album) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Album Title:</label>
            <input type="text" id="title" name="title"
                   value="{{ old('title', $album->title) }}" required>
        </div>

        <br>

        <div>
            <label for="artist">Artist:</label>
            <input type="text" id="artist" name="artist"
                   value="{{ old('artist', $album->artist) }}" required>
        </div>

        <br>

        <div>
            <label for="genre">Genre:</label>
            <select id="genre" name="genre" required>
                <option value="Pop" {{ old('genre', $album->genre) == 'Pop' ? 'selected' : '' }}>Pop</option>
                <option value="Rock" {{ old('genre', $album->genre) == 'Rock' ? 'selected' : '' }}>Rock</option>
                <option value="R&B" {{ old('genre', $album->genre) == 'R&B' ? 'selected' : '' }}>R&B</option>
                <option value="Soul" {{ old('genre', $album->genre) == 'Soul' ? 'selected' : '' }}>Soul</option>
                <option value="Electronic" {{ old('genre', $album->genre) == 'Electronic' ? 'selected' : '' }}>Electronic</option>
                <option value="Jazz" {{ old('genre', $album->genre) == 'Jazz' ? 'selected' : '' }}>Jazz</option>
                <option value="Hip-Hop" {{ old('genre', $album->genre) == 'Hip-Hop' ? 'selected' : '' }}>Hip-Hop</option>
            </select>
        </div>

        <br>

        <div>
            <label for="release_year">Release Year:</label>
            <input type="number" id="release_year" name="release_year"
                   value="{{ old('release_year', $album->release_year) }}" required>
        </div>

        <br>

        <div>
            <label for="track_count">Number of Tracks:</label>
            <input type="number" id="track_count" name="track_count"
                   value="{{ old('track_count', $album->track_count) }}" required>
        </div>

        <br>

        <div>
            <label for="duration_minutes">Duration (minutes):</label>
            <input type="number" id="duration_minutes" name="duration_minutes"
                   value="{{ old('duration_minutes', $album->duration_minutes) }}" required>
        </div>

        <br>

        <button type="submit">Update Album</button>
    </form>

    <p>
        <a href="{{ route('albums.index') }}">Back to Albums</a>
    </p>

@endsection
