<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Book;

class ReviewController extends Controller
{
    public function store(Request $request ,Book $book)
    {
        $validatedData = $request->validate([
            'comment' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);
        $bookId = $request->input('book_id');

        $review = new Review();
        $review->comment = $validatedData['comment'];
        $review->rating = $validatedData['rating'];
        $review->user_id = auth()->user()->id; // Assuming you have authentication implemented
        $review->book_id = $bookId; // The book ID should be passed from the view
        $review->save();

        return redirect()->back()->with('success', 'Review submitted successfully.');
    }
}
