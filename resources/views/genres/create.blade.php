<!DOCTYPE html>
<html>
<head>
    <title>Create Genre</title>
</head>
<body>
    <h1>Create Genre</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('genres.store') }}">
        @csrf

        <label for="name">Genre Name</label>
        <input type="text" id="name" name="name">

        @error('name')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Create Genre</button>
    </form>
</body>
</html>
