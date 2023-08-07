<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Wishlist;

class MyBooksController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $wishlist = Wishlist::where('user_id', $userId)->get();

        return view('my-books', [
            'wishlist' => $wishlist,
            'active' => 'mybooks',
            'title' => 'My Books'
        ]);
    }
}
