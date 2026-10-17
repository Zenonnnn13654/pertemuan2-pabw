
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Laporan</title>
    <style>
        body {
            font-family: Arial;
            background: #eef5f9;
            padding: 30px;
        }
        main {
            max-width: 450px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 12px;
        }
    </style>
</head>
<body>
<main>
    <h1>Laporan Berhasil Diproses!</h1>

    <p>Nama: {{ $data['nama'] }}</p>
    <p>Lokasi: {{ $data['lokasi'] }}</p>
    <p>Tinggi Genangan: {{ $data['tinggi'] }} cm</p>

    <p>Data hanya diproses sementara dan tidak disimpan ke database.</p>

    <a href="{{ route('banjir.index') }}">Kembali ke Form</a>
</main>
</body>
</html>
