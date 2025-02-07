<!DOCTYPE html>
<html lang="en">
<head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<body>
    <?php
         if(isset($_POST['submit']))
         
    ?>

    <tr>
        <td>NISN </td>
        <td>: </td>
        <td>
            <?= $_POST['nisn']?>
        </td>
    </tr>

    <tr>
        <td>Nama Lengkap </td>
        <td>: </td>
        <td>
            <?= $_POST['nama']?>
        </td>
    </tr>

    <tr>
        <td>Tempat Lahir </td>
        <td>: </td>
        <td>
            <?= $_POST['tempat_lahir']?>
        </td>
    </tr>

    <tr>
        <td>Tanggal Lahir </td>
        <td>: </td>
        <td>
            <?= $_POST['tanggal_lahir']?>
        </td>
    </tr>

    
    <tr>
        <td>Jenis Kelamin  </td>
        <td>: </td>
        <td>
            <?= $_POST['jenkel']?>
        </td>
    </tr>

    <tr>
        <td>Agama </td>
        <td>: </td>
        <td>
            <?= $_POST['agama']?>
        </td>
    </tr>

    <tr>
        <td>ALAMAT </td>
        <td>: </td>
        <td>
            <?= $_POST['alamat']?>
        </td>
    </tr>
    <tr>
        <td>Asal Sekolah </td>
        <td>: </td>
        <td>
            <?= $_POST['asal_sekolah']?>
        </td>
    </tr>
    <tr>
        <td>Pilih jurusan 1 </td>
        <td>: </td>
        <td>
            <?= $_POST['select1']?>
        </td>
    </tr>

    <tr>
        <td>Pilih jurusan 2 </td>
        <td>: </td>
        <td>
            <?= $_POST['select2']?>
        </td>
    </tr>



</body>
 </html>
