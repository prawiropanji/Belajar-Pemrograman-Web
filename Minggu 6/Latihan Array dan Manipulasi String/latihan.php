<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="tabel.php" method="post">
    <p>NIM :</p> <input type="text" name="nim">
    <p> Program Studi :</p> <select name="prodi" id="">
        <option value="A11">Teknik Informatika S1</option>
        <option value="A12">Sistem Informasi S1</option>
        <option value="A22">Teknik Informatika D3</option>
</select>
        
        <p>Nilai Tugas :</p> <input type="number" name="n_tugas" id="" min="0" max="100">
        <p>Nilai UTS :</p> <input type="number" name="n_uts" id="" min="0" max="100">
        <p>Nilai UAS :</p> <input type="number" name="n_uas" id="" min="0" max="100">
        <p>Catatan Khusus :</p> <input type="checkbox" name="catatan[]" value="Kehadiran >=70%" id="">Kehadiran >=70% <br>
        <input type="checkbox" name="catatan[]" value="interaktif dikelas" id=""> interaktif dikelas <br>
        <input type="checkbox" name="catatan[]" value="Tidak terlambat mengumpulkan tugas" id="">Tidak terlambat mengumpulkan tugas<br>

        <input type="submit" name="simpan" value="SIMPAN">
    </form>
</body>

</html>