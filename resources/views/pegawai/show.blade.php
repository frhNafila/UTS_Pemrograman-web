<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Detail Pegawai</title>
</head>
<body>

    <div class="container-show">
        <div class="form">
            <h2>Detail Pegawai</h2>

            <table class="table_show">
                <tr>
                    <th class="show">ID</th>
                    <td class="show">{{$pegawai->id}}</td>
                </tr>
                <tr>
                    <th class="show">Nama</th>
                    <td class="show">{{$pegawai->name}}</td>
                </tr>
                <tr>
                    <th class="show">Alamat</th>
                    <td class="show">{{$pegawai->address}}</td>
                </tr>
                <tr>
                    <th class="show">Tanggal Lahir</th>
                    <td class="show">{{$pegawai->date}}</td>
                </tr>
                <tr>
                    <th class="show">Jabatan</th>
                    <td class="show">{{$pegawai->jabatan}}</td>
                </tr>
            </table>
            <div class="back-button">
                <a href="{{ route('pegawai.index') }}" id="back">Back</a>
            </div>
        </div>
    </div>

</body>
</html>
