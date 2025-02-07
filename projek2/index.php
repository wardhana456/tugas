<!DOCTYPE html>
<html lang="en">
<head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <legend><h1>Formulir</h1><legend>
        <title>Document</title>
</head>
<body>
    <!DOCTYPE html> 
<html lang="en"> 
<head> 
 <meta charset="UTF-8"> 
 <meta name="viewport" content="width=device-width, initial scale=1.0"> 
 <title>Mengenal Form </title> 
<body> 
<form action="projek2.php" method="post"> 
<form>
<fieldset>
  <p><p>Silahkan isi data berikut :</p> 
 NISN : <input type="text" name="nisn"> <br /></p>

 <p>Nama Lengkap : <input type="text" name="nama"> <br /> </p>

 <p>Tempat Lahir : <input type="text" name="tempat_lahir"> <br /></p>

 <p>Tanggal Lahir : <input type="date" name="tanggal_lahir"> <br /></p>

 <p>Jenis Kelamin : <input type="radio" name="jenkel" value="laki-laki">Laki-laki  <input type="radio" name="jenkel" value="perempuan">Perempuan  <br /> </p>

 <p>Agama : <select id="agama" name="agama">
    <option value="Islam">Islam </option>
    <option value="Kristen">Kristen </option>
    <option value="Hindu">Hindu </option>
    <option value="Budha">Budha </option>
    <option value="kongkhucu">kongkhucu </option>
    <br />
    </select>
<br/></p>

<p><p>ALAMAT :</p>
<textarea name="alamat" id="alamat" cols="30" rows="10"></textarea> <br /></p>
<p>Asal Sekolah : <input type="text" name="asal_sekolah"> <br />
<p>Pilih jurusan 1:</p>
<select name="select1">
<option value="jurusan">PENGEMBANGAN PERANGKAT LUNAK & GIM</option>
<option value="jurusan">TEKNIK JARINGAN KOMPUTER & TELEKOMUNIKASI</option>
<option value="jurusan">DESAIN KOMUNIKASI VISUAL</option>
<option value="jurusan">SENI TARI</option>
<option value="jurusan">AKUTANSI KEUANGAN LEMBAGA</option>
<option value="jurusan">MANAJEMEN PERKANTORAN & LAYANAN BISNIS</option>
<option value="jurusan">PERHOTELAN</option>
<option value="jurusan">PEMASARAN</option>
<option value="jurusan">BROADCASTING & PERFILEMAN</option>
</select>
<br/></p>

<p><p>Pilih jurusan 2:</p>
<select name="select2">
<option value="jurusan">PENGEMBANGAN PERANGKAT LUNAK & GIM</option>
<option value="jurusan">TEKNIK JARINGAN KOMPUTER & TELEKOMUNIKASI</option>
<option value="jurusan">DESAIN KOMUNIKASI VISUAL</option>
<option value="jurusan">SENI TARI</option>
<option value="jurusan">AKUTANSI KEUANGAN LEMBAGA</option>
<option value="jurusan">MANAJEMEN PERKANTORAN & LAYANAN BISNIS</option>
<option value="jurusan">PERHOTELAN</option>
<option value="jurusan">PEMASARAN</option>
<option value="jurusan">BROADCASTING & PERFILEMAN</option>
</select>
<br/></p>

<p><p>Ekstrakulikuler yang diminati :</p>
 <input type="checkbox" name="OSIS">OSIS
 <input type="checkbox" name="PRAMUKA">PRAMUKA 
 <input type="checkbox" name="PECINTA ALAM">PECINTA ALAM 
 <input type="checkbox" name="REMAS">REMAS
 <input type="checkbox" name="UKS">UKS/PMR
 <input type="checkbox" name="FUTSAL">FUTSAL
 <input type="checkbox" name="BASKET">BASKET
 <input type="checkbox" name="VOLI">VOLI
 <input type="checkbox" name="TEATER">TEATER
 <input type="checkbox" name="LASKAR HIJAU">LASKAR HIJAU
 <input type="checkbox" name="GERAKAN DISIPLIN SEKOLAH">GERAKAN DISIPLIN SEKOLAH(GDS)
 <br /><br /> </p>
<p> <button type="submit" name="submit" value="simpan">Simpan</button> </form> 
</p>


</body> 
</html> 
    
</body>
</html>







</fieldset>
</form>
 