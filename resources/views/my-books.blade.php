<!-- my-books.blade.php -->

@extends('layouts.main')

@section('container')
<div id="preloder">
    <div class="loader"></div>
</div>
<section class="my-books-section">
    <div class="container">
        <h2>My Wishlist Books</h2>
        <div class="my-books-wrapper">
            <div class="my-books">
                @if ($wishlist->isEmpty())
                    <p>No wishlist books found.</p>
                @else
                    @foreach($wishlist as $item)
                        <div class="my-book-item product__item__text">
                            <a href="{{ route('books.show', $item->book->slug) }}"><img src="/img/books/{{ $item->book->cover }}" alt="{{ $item->book->title }}"></a>
                            <h5>
                                <a href="{{ route('books.show', $item->book->slug) }}">{{ $item->book->title }}</a>
                            </h5>
                            @if ($item->marked_as_read)
                                <span class="book-marked">Read</span>
                            @else
                                <form action="{{ route('books.markRead', $item->book->id) }}" method="POST">
                                    @csrf
                                    <button class="mark-read-btn btn btn-dark" type="submit">Mark as Read</button>
                                </form>
                            @endif
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

<style>
    .my-books-section {
        padding: 40px 0;
    }

    .my-books-wrapper {
        overflow-x: auto;
    }

    .my-books {
        display: flex;
        gap: 20px;
    }

    .my-book-item {
        flex: 0 0 auto;
        width: 200px; /* Adjust the width as needed */
        position: relative;
    }

    .my-book-item img {
        display: block;
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .book-marked {
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 5px 10px;
        background-color: #e2e2e2;
        border-radius: 4px;
        font-size: 12px;
        color: #555;
    }

    .mark-read-btn {
        position: absolute;
        bottom: 100px;
        border: 0;
        left: 50%;
        transform: translateX(-50%);
        padding: 5px 10px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        font-size: 12px;
    }
</style>
@endsection
