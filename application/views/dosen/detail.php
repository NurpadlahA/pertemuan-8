<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $ds->id ?></td>
                <td><?php echo $ds->nama ?></td>
                <td><?php echo $ds->gender?></td>
                <td><?php echo $ds->tmp_lahir?></td>
                <td><?php echo $ds->tgl_lahir?></td>
                <td><?php echo $ds->nidn ?></td>
                <td><?php echo $ds->pendidikan ?></td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>