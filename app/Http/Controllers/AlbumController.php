<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    // Display albums with search, filtering, and pagination
    public function index(Request $request)
    {
        $query = Album::query();

        // Search by album title or artist
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('artist', 'LIKE', "%{$search}%");
            });
        }

        // Filter by genre
        if ($request->filled('genre')) {
            $query->where('genre', $request->genre);
        }

        // Paginate results and preserve search/filter parameters
        $albums = $query->paginate(10)->withQueryString();

        return view('albums.index', compact('albums'));
    }

    // Show the form for creating an album
    public function create()
    {
        return view('albums.create');
    }

    // Store a new album
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:150',
            'artist' => 'required|string|max:100',
            'genre' => 'required|string|max:50',
            'release_year' => 'required|integer|min:1',
            'track_count' => 'required|integer|min:1',
            'duration_minutes' => 'required|integer|min:1',
        ]);

        Album::create($validated);

        return redirect()->route('albums.index')
            ->with('success', 'Album created successfully!');
    }

    // Show the form for editing an album
    public function edit(Album $album)
    {
        return view('albums.edit', compact('album'));
    }

    // Update an existing album
    public function update(Request $request, Album $album)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:150',
            'artist' => 'required|string|max:100',
            'genre' => 'required|string|max:50',
            'release_year' => 'required|integer|min:1',
            'track_count' => 'required|integer|min:1',
            'duration_minutes' => 'required|integer|min:1',
        ]);

        $album->update($validated);

        return redirect()->route('albums.index')
            ->with('success', 'Album updated successfully!');
    }

    // Delete an album
    public function destroy(Album $album)
    {
        $album->delete();

        return redirect()->route('albums.index')
            ->with('success', 'Album deleted successfully!');
    }
}
