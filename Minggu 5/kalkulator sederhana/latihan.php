<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body {
    font-family: 'Gill Sans', sans-serif;
}
</style>
</head>
<body>
    <h1> Kalkulator sederhana</h1>
    <form action="">
        Bil 1 <input type="text" name="bil1" placeholder="masukan angka 1">
        <br>
        Bil 2 <input type="text" name="bil2" placeholder="masukan angka 2">
        <br>
        Operator <select name="operator" id="">
            <option value="" disabled selected hidden>pilih operator aritmatika</option>
            <option value="plus">+ (tambah)</option>
            <option value="min">- (kurang)</option>
            <option value="kali">x (kali)</option>
            <option value="bagi">% (bagi)</option>
        </select>   
        <button type="submit" name="submit" value="submit">=</button>
        <br>
    </form>
    <p>Hasil:</p>
    <?php
        if(isset($_GET['submit'])){
            $angka1 = $_GET['bil1'];
            $angka2 = $_GET['bil2'];
            $operator = $_GET['operator'];
            switch($operator){
                case "plus": 
                    echo $angka1+$angka2;
                break;
                case "min": 
                    echo $angka1-$angka2;
                break;
                case "kali": 
                    echo $angka1*$angka2;
                break;
                case "bagi": 
                    echo $angka1/$angka2;
                break;
                default:
                echo "Anda harus masukan angka";
                
            }
        }
    ?>
</body>
</html>