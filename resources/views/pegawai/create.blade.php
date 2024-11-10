<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Tambah</title>
</head>
<body>
    <div class="container-form">
        <div class="form">
            
            <h2>Form Tambah Pegawai</h2>

            <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="id">Id</label>
                <input type="text" id="id" name="id" value="{{ $nextId }}" readonly>
                <br>

                <label for="name">Nama</label>
                <input type="text" id="name" name="name" required>
                <br>

                <label for="address">Alamat</label>
                <textarea id="address" name="address" required></textarea>
                <br>

                <label for="date">Tanggal Lahir</label>
                <input type="date" id="date" name="date" required>
                <br>

                <label for="jabatan">Jabatan</label>
                <input type="text" id="jabatan" name="jabatan" required>
                <br>

                <button type="submit" class="simpan">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>
