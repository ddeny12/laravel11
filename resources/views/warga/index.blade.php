<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Karyawan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Karyawan</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>RONY</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($warga as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->nik}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->jenis_kelamin}}</td>
            </tr>
            <!-- Tambahkan baris baru untuk setiap karyawan -->
            @endforeach
        </tbody>
    </table>
    
</body>
</html>
