@extends('layouts.main')

@section('container')
    <!-- Edit Book Form -->
    <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')

        <!-- Form fields -->

        <div class="form-group">
            <label for="genres">Genres</label>
            @foreach ($genres as $genre)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="genres[]" value="{{ $genre->id }}" {{ $book->genres->contains($genre->id) ? 'checked' : '' }}>
                    <label class="form-check-label" for="genre{{ $genre->id }}">{{ $genre->name }}</label>
                </div>
            @endforeach
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
