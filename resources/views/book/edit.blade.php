<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        body {
            background: #fdfdfd;
            font-family: system-ui, sans-serif;
        }
        .form-wrapper {
            max-width: 600px;
            margin: 5% auto;
            padding: 2rem;
        }
        .form-control {
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0;
            box-shadow: none;
        }
        .form-control:focus {
            border-color: #000;
            box-shadow: none;
        }
        .btn-custom {
            background: #000;
            color: #fff;
            border-radius: 30px;
            padding: 0.6rem 1.2rem;
            transition: 0.2s;
        }
        .btn-custom:hover {
            background: #333;
        }
    </style>
</head>
<body>
<div class="form-wrapper">
    <h3 class="mb-4 text-center">Edit Book</h3>
    <form action="{{ route('book.update', $book) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-4">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" value="{{ $book->title }}" class="form-control" placeholder="Enter title">
        </div>
        <div class="mb-4">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" rows="5" class="form-control" placeholder="Write description...">{{ $book->description }}</textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-custom">Save</button>
        </div>
    </form>
</div>
</body>
</html>
