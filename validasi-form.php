<!DOCTYPE html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title> Validasi Data dengan HTML-PHP</title>
</head>
<body>
   <form action="proses-validasi.php" method="get">
   <fieldset>
        <legend>Responsi Validasi Data dengan HTML-PHP</legend>
     <p>Nama         : <input type="text" name="nama" /></p>
    <p> Nomor Telepon: <input type="number" name="nomor" /></p>
    <p> Alamat       : <input type="text" name="alamat" /></p>
    <p> Umur         : <input type="number" name="umur" /></p>
    <p> Hobi         : <input type="text" name="hobi" /></p>
    <p> E-Mail       : <input type="text" name="email" /></p>
    <p>
     <input type="submit" value="Proses Data" ></p>
     </fieldset>
   </form>
</body>
</html>