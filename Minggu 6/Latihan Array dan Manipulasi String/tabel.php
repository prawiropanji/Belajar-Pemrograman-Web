<?php
if(isset($_POST['simpan'])){
 $nim = $_POST['nim'];
 $prodi = $_POST['prodi'];
 $n_tugas = $_POST['n_tugas'];
 $n_uts = $_POST['n_uts'];
 $n_uas = $_POST['n_uas'];  
 
 $n_akhir = $n_tugas*0.4 + $n_uts*0.3 + $n_uas*0.3;

 if ( $n_akhir >84 ){
     $status = "A (Lulus)";
 }
 else{
  if ($n_akhir <85 && $n_akhir>69 ) {
    $status = "B (Lulus)";
 }
 else{
  if ($n_akhir <68 && $n_akhir>59 ) {
     $status = "C (Lulus)";
 }
 else{ 
  if ($n_akhir <58 && $n_akhir>49 ) {
     $status = "D (tidak lulus)";
 }
 else {
     $status = "E (tidak lulus)";
 }
}
 }
}

 $pilihcatatan = array();
 if(!empty($_POST['catatan'])){
     foreach ($_POST['catatan'] as $catatan) {
         array_push($pilihcatatan,$catatan);
     }
 }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 table {
            border-collapse: collapse;
        }


        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Program Studi</th>
            <th>NIM</th>
            <th>Nilai Akhir</th>
            <th>STATUS</th>
            <th>Catatan Khusus</th>
        </tr>
        <tr>
            <td><?php echo  $prodi; ?></td>
            <td> <?php echo  $nim; ?> </td>
            <td><?php echo  $n_akhir; ?></td>
            <td><?php echo  $status; ?></td>
            <td><?php foreach ($pilihcatatan as $c_khusus) {
                echo $c_khusus. "<br>";
            } ?></td>
        </tr>
    </table>

</body>

</html>