<!DOCTYPE html>
<html lang="en">
<head>
    <title>Books</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">

    <h2>Data Buku Perpustakaan</h2>

    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <form name="book-save-form" id="book-save-form" action="{{ url('/books/save-book') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" name="id" id="id">
        </div>
        <div class="form-group">
            <label for="book_name">Nama Buku</label>
            <input type="text" class="form-control" name="book_name" id="book_name">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="text" class="form-control" name="jumlah" id="jumlah">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="text" class="form-control" name="tanggal" id="tanggal">
        </div>
        <div class="form-group">
            <label for="kondisi">Kondisi</label>
            <input type="text" class="form-control" name="kondisi" id="kondisi">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <br>

    <table class="table table-dark table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Buku</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Kondisi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $b)
            <tr>
                <td>{{ $b['id'] }}</td>
                <td>{{ $b['book_name'] }}</td>
                <td>{{ $b['jumlah'] }}</td>
                <td>{{ $b['tanggal'] }}</td>
                <td>{{ $b['kondisi'] }}</td>
                <td>
                    <form action="{{ url('/books/delete-book?id=').$b['id'] }}" method="get">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
