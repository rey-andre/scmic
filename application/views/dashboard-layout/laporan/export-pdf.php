<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$title;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4e73df;
                color: white;
            }
        </style>
    </head>
    <body>
        <div style="text-align:center">
            <h3> Data Laporan </h3>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Isi Laporan</th>
                    <th>Tanggal Laporan</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach ($laporan as $laporan) : ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=ucfirst($laporan->nama)?></td>
                        <td><?=ucfirst($laporan->email)?></td>
                        <td><?=ucfirst($laporan->deskripsi)?></td>
                        <td><?=date('D, d-m-Y H:i', strtotime($laporan->tgl))?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </body>
</html>