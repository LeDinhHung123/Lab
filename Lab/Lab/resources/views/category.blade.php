<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sách theo loại</title>
</head>
<body>
<h1>Sách thuộc loại: {{ $category->name }}</h1>
@foreach($books as $book)
    <div>
        <h2>{{ $book->title }}</h2>
        <p>Giá: {{ $book->price }}</p>
    </div>
@endforeach
</body>
</html>
