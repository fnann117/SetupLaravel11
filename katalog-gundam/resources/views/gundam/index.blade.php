<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Model Gundam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Katalog Model Gundam</h1>
        
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Model</th>
                        <th>Seri</th>
                        <th>Deskripsi</th>
                        <th>Harga (IDR)</th>
                        <th>Stok</th>
                        <th>Grade</th>
                        <th>Tinggi (cm)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gundams as $gundam)
                    <tr>
                        <td>{{ $gundam->id }}</td>
                        <td>{{ $gundam->nama_model }}</td>
                        <td>{{ $gundam->seri }}</td>
                        <td>{{ $gundam->deskripsi }}</td>
                        <td>Rp {{ number_format($gundam->harga, 0, ',', '.') }}</td>
                        <td>{{ $gundam->stok }}</td>
                        <td>{{ $gundam->grade }}</td>
                        <td>{{ $gundam->tinggi }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>