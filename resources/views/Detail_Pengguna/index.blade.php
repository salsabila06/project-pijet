<!DOCTYPE html>
<html>

<head>
    <TITLE>Detail Pengguna</TITLE>
    <link rel="stylesheet" href="{{ asset('/css/detailPengguna.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="detail-main">
        <div>
            <h2 style="text-align: center; padding:20px 0;">Detail Pengguna</h2>

            <img src="/image/doraemon.png" class="mx-auto d-block" style="width:90px" alt="">
            <table>
                <tbody>
                    <tr>
                        <td style="padding: 7px 60px 0 50px">Username</td>
                        <td>:</td>
                        <td>{{ $data->username }}</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 50px">Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 50px">Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{ $data->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 50px">Email</td>
                        <td>:</td>
                        <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 50px">No Telepon</td>
                        <td>:</td>
                        <td>{{ $data->no_telp }}</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 50px">No KTP</td>
                        <td>:</td>
                        <td>{{ $data->no_ktp }}</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 50px">Alamat</td>
                        <td>:</td>
                        <td>{{ $data->alamat }}</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 50px">Domisili</td>
                        <td>:</td>
                        <td>{{ $data->domisili }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
