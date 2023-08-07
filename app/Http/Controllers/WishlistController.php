<?php

namespace App\Http\Controllers;

// app/Http/Controllers/WishlistController.php

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\User;

class WishlistController extends Controller
{
    /**
     * Store a book in the user's wishlist.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookId = $request->input('book_id');
        $userId = Auth::id();

        // Check if the book is already in the user's wishlist
        if (Wishlist::where('user_id', $userId)->where('book_id', $bookId)->exists()) {
            return redirect()->back()->with('error', 'Book is already in the wishlist.');
        }

        // Create a new Wishlist entry
        $wishlist = new Wishlist();
        $wishlist->user_id = $userId;
        $wishlist->book_id = $bookId;
        $wishlist->save();

        return redirect()->back()->with('success', 'Book added to wishlist.');
    }

    /**
     * Remove a book from the user's wishlist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userId = Auth::id();

        // Find the wishlist entry for the given user and book
        $wishlist = Wishlist::where('user_id', $userId)->where('book_id', $id)->first();

        // Check if the wishlist entry exists
        if (!$wishlist) {
            return redirect()->back()->with('error', 'Book not found in wishlist.');
        }

        // Delete the wishlist entry
        $wishlist->delete();

        return redirect()->back()->with('success', 'Book removed from wishlist.');
    }
}
