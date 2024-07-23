<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Pendapatan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h3 style="text-align: center;">Laporan Pendapatan</h3>
    <h4 style="text-align: center;">
        Tanggal {{ tanggal_indonesia($awal, false) }} s/d Tanggal {{ tanggal_indonesia($akhir, false) }}
    </h4>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Penjualan</th>
                <th>Pembelian</th>
                <th>Pengeluaran</th>
                <th>Pendapatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $row['tanggal'] }}</td>
                    <td>{{ $row['penjualan'] }}</td>
                    <td>{{ $row['pembelian'] }}</td>
                    <td>{{ $row['pengeluaran'] }}</td>
                    <td>{{ $row['pendapatan'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
