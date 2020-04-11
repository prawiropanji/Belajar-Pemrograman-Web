<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .tulisan{
        display: inline;
   
    }
     p {
        font-family: 'Gill Sans', sans-serif;
    }
    </style>
</head>
<body>
    <p class="tulisan">Masukan angka</p>
    <form action="">
    <input type="text" name="angka" placeholder="Masukan Bilangan faktorial n!">
    Faktorial<button type="submit" name="submit" value="submit">=</button>
    </form>
    <p>Hasil : </p>
    <?php
if(isset($_GET['submit'])){
    $bil = $_GET['angka'];
       $hasil = 1;
for($i=$bil;$i>0;$i--){
$hasil = $hasil * $i;
}
echo $hasil;
}
    ?>

</body>
</html>