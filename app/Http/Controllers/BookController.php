<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Review;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('genres')->get();
        $recommendations = collect();
        $mostCommonGenre = null;

        if (Auth::check()) {
            $userGenres = Auth::user()->books->flatMap(function ($book) {
                return $book->genres;
            });

            $mostCommonGenreId = $userGenres->groupBy('id')->sortDesc()->keys()->first();

            if ($mostCommonGenreId) {
                $mostCommonGenre = Genre::where('id', $mostCommonGenreId)->value('name');
            }

            $recommendations = Book::with('genres')
                ->whereHas('genres', function ($query) use ($mostCommonGenreId) {
                    $query->where('id', $mostCommonGenreId);
                })
                ->take(4)
                ->get();
        }

        return view('index', [
            'books' => $books,
            'mostCommonGenre' => $mostCommonGenre,
            'recommendations' => $recommendations,
            'title' => 'Home',
            'active' => 'home'
        ]);
    }


    public function show($slug)
    {
        $book = Book::where('slug', $slug)->with('genres', 'reviews')->firstOrFail();

        // Calculate the average rating for the book
        $averageRating = $book->reviews->avg('rating');

        return view('books.show', [
            "title" => "Detail",
            "active" => 'books',
            "book" => $book,
            "averageRating" => $averageRating
        ]);
    }
    public function edit(Book $book)
    {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(403); // Or redirect to a specific route
        }
        $genres = Genre::orderBy('name', 'asc')->get();
        $title = "Edit"; // Set the title
        $active = "edit"; // Set the active
        return view('books.edit', compact('book', 'genres', 'title', 'active'));
    }


    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            // Validation rules for other fields
        ]);

        $genres = $request->input('genres', []); // Get the selected genres from the request

        $book->genres()->sync($genres); // Sync the selected genres with the book

        // Update other fields of the book if needed

        // Save the updated book
        $book->save();

        // Redirect to the show page of the book
        return redirect()->route('books.show', $book->slug);
    }

    public function markRead($id)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Check if the book exists in the user's wishlist
        $wishlistItem = Wishlist::where('user_id', $user->id)
            ->where('book_id', $id) // Use the provided $id parameter
            ->first();

        if ($wishlistItem) {
            // Update the 'marked_as_read' attribute to true
            $wishlistItem->marked_as_read = true;
            $wishlistItem->save();
        }

        // Redirect back to the wishlist page
        return redirect()->route('mybooks.index')->with('success', 'Book marked as read.');
    }

}