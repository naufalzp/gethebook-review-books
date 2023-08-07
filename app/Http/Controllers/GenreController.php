<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function create()
    {
        return view('genres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:genres|max:255',
        ]);

        $genre = Genre::create([
            'name' => $request->name,
        ]);

        return redirect()->route('genres.create')
            ->with('success', 'Genre created successfully.');
    }
}
