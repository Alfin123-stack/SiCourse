<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
        }
        td {
            padding: 10px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: #ffffff;
        }
        a {
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h3 style="text-align: center;">{{ $judul }}</h3>

    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA MENTOR</th>
                <th>EMAIL</th>
                <th>NO HP</th>
                <th>DESKRIPSI</th>
                <th>JENIS KELAMIN</th>
                <th>SKILL</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($mentor as $rsmentor)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $rsmentor->namaMentor }}</td>
                    <td>{{ $rsmentor->email }}</td>
                    <td>{{ $rsmentor->NoHp }}</td>
                    <td>{{ $rsmentor->Deksripsi }}</td>
                    <td>{{ $rsmentor->jenis_kelamin }}</td>
                            <td>{{ $rsmentor->Skill }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
