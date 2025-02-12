<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php    

if(isset($_POST['input'])){
$gajibulanan = floatval($_POST['totalbulanan']);
$npwp =$_POST['npwp'];
$gajitahunan = $gajibulanan * 12 ;

if ($gajitahunan > 54000000 ){
    if ($npwp == 'IYA')
    $pajak = $gajitahunan * 0.15 ;

}else {
    $pajak = $gajitahunan * 0.20 ;
}
$gajibersihbulanan = ($gajitahunan - $pajak ) / 12 ;
$gajipajakbulanan = $pajak / 12 ;
$gajikotorbulanan = $gajitahunan / 12 ;
   
}
?>
<table border=1 style="border-collapse : collapse : width : 50%">
                <p>
                    
                <tr>
                                <td>Nama Karyawan</td>
                                    <td>:</td?>
                                    <td>
                                        <?= $_POST['nama']; ?>
                                    </td>
                                </tr>
                    </p>

                    <p>
                        
                    <tr>
                                <td>Divisi</td>
                                <td>:</td?>
                                <td>
                                        <?= $_POST['divisi']; ?>
                                </td>
                            </tr>
                    </p>
                    
                    <tr>
                                <td>Total Gaji Perbulan</td>
                                <td>:</td?>
                                <td>
                                        <?= $_POST['gajibulanan']; ?>
                                </td>
                            </tr>
                    <p>

                    <p>
                        
                    <tr>
                                <td>NPWP</td>
                                <td>:</td?>
                                <td>
                                        <?= $_POST['npwp']; ?>
                                </td>
                            </tr>
                    </p>

                    <p>
                        
                        <tr>
                                    <td>Gaji kotor pertahun</td>
                                    <td>:</td?>
                                    <td>
                                            <?=number_format($gajitahunan 0, ',', '.') ?>
                                    </td>
                                </tr>
                        </p>
    

                    


        
</table>
</body>
</html>