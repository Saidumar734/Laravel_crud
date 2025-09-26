<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style>
        body {
            background: #121212;
            font-family: "Segoe UI", sans-serif;
            color: #eaeaea;
            margin: 0;
            padding: 2rem;
        }
        a {
            color: #00d4ff;
            text-decoration: none;
            font-weight: 500;
        }
        a:hover {
            text-decoration: underline;
        }
        .add-new {
            display: inline-block;
            margin-bottom: 1rem;
            padding: 8px 16px;
            background: #00d4ff;
            color: #121212;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.2s;
        }
        .add-new:hover {
            background: #00aacc;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #1e1e1e;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background: #00d4ff;
            color: #121212;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
        }
        tr:nth-child(even) {
            background: #2a2a2a;
        }
        tr:hover td {
            background: #333;
        }
        .btn-delete {
            background: transparent;
            border: 1px solid #ff4d6d;
            color: #ff4d6d;
            padding: 4px 10px;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.2s;
        }
        .btn-delete:hover {
            background: #ff4d6d;
            color: #fff;
        }
    </style>
</head>
<body>
<a href="{{route('book.create')}}" class="add-new">+ Add new</a>

<table>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Description</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->description}}</td>
            <td><a href="{{route('book.show', $book)}}">Show</a></td>
            <td><a href="{{route('book.edit', $book)}}">Edit</a></td>
            <td>
                <form action="{{route('book.destroy',$book)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn-delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
