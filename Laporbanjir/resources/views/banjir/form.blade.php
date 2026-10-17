
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form LaporBanjir</title>
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
        input, button {
            width: 100%;
            box-sizing: border-box;
            padding: 12px;
            margin: 8px 0;
        }
        button {
            background: #087e8b;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<main>
    <h1>LaporBanjir</h1>
    <p>BPBD Kabupaten Bandung</p>

    <form action="{{ route('banjir.store') }}" method="POST">
        @csrf

        <label>Nama Pelapor</label>
        <input type="text" name="nama" required>

        <label>Lokasi Kecamatan/Desa</label>
        <input type="text" name="lokasi" required>

        <label>Tinggi Genangan (cm)</label>
        <input type="number" name="tinggi" min="0" step="any" required>

        <button type="submit">Kirim Laporan</button>
    </form>
</main>
</body>
</html>
