{{ $book }}

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
            font-family: system-ui, sans-serif;
            color: #333;
            margin: 0;
            padding: 2rem;
        }
        .book-container {
            max-width: 700px;
            margin: 5% auto;
            padding: 2rem;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        h1 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            text-align: center;
        }
        p {
            font-size: 1.9rem;
            line-height: 1.6;
            white-space: pre-line; /* сохраняет переносы */
        }
    </style>
</head>
<body>
<div class="book-container">
    <h1>{{ $book->title }}</h1>
    <p>{{ $book->description }}</p>
</div>
</body>
</html>
