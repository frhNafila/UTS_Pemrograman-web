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
            
            <h2>Edit Pegawai</h2>

            <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
                @csrf
                @method('PUT')

                <label for="name">Nama</label>
                <input type="text" id="name" name="name" value="{{$pegawai->name}}" required>
                <br>

                <label for="address">Alamat</label>
                <textarea id="address" name="address" required>{{ $pegawai->address }}</textarea>                
                <br>

                <label for="date">Tanggal Lahir</label>
                <input type="date" id="date" name="date" value="{{$pegawai->date}}" required>
                <br>

                <label for="jabatan">Jabatan</label>
                <input type="text" id="jabatan" name="jabatan" value="{{$pegawai->jabatan}}" required>
                <br>

                <button type="save" class="simpan">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</body>
</html>
