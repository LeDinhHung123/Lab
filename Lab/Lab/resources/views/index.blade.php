<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Thêm Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Top 8 Sản phẩm có giá cao nhất</h1>
    <div class="row">
        @foreach($highestPricedBooks as $book)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text price">Giá: {{ number_format($book->price, 2, ',', '.') }} VNĐ</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h1 class="mt-5 mb-4">Top 8 Sản phẩm có giá thấp nhất</h1>
    <div class="row">
        @foreach($lowestPricedBooks as $book)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text price">Giá: {{ number_format($book->price, 2, ',', '.') }} VNĐ</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Thêm Bootstrap JS (nếu cần) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
