<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
    <h3>Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor = 1;
            foreach ($dosen as $dsn){
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $dsn->nama?></td>
                <td><?php echo $dsn->pendidikan ?></td>
                <td>
                    <a href="<?php echo base_url("index.php/dosen/detail/$dsn->id")?>">Detail</a>
                </td>
            </tr>

            <?php 
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>