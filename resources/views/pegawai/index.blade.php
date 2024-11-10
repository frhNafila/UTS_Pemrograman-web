<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Data Pegawai</title>
</head>
<body>
    <h1>Data Pegawai<br>Lazismu Kantor Layanan Wiradesa</h1>

    <div class="container">
        <div class="button">
            <button class="button-add" onclick="window.location.href='{{route('pegawai.create')}}'">Tambah Data</button>
        </div>

        <div class="data">
            <div class="table-data">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>jabatan</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($pegawais as $pegawai)

                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$pegawai->id}}</td>
                        <td>{{$pegawai->name}}</td>
                        <td>{{$pegawai->address}}</td>
                        <td>{{$pegawai->date}}</td>
                        <td>{{$pegawai->jabatan}}</td>
                        <td>
                            <div class="aksi-button">
                                <form action="{{ route('pegawai.show', $pegawai->id) }}" method="GET" style="display:inline;">
                                    <button type="submit" Id="show">Detail</button>
                                </form>    

                                <form action="{{ route('pegawai.edit', $pegawai->id) }}" method="GET" style="display:inline;">
                                    <button type="submit" Id="edit">Edit</button>
                                </form>         

                                <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" Id="hapus">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>