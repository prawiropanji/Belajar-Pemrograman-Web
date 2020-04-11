 let data = {};

 function funcNama(e) {
     var pilih = document.getElementById("pilih");
     var hasil = pilih.options[pilih.selectedIndex].value;
     var show = document.getElementById("show");
     show.value = hasil;


     data.nim = pilih.options[pilih.selectedIndex].text;
     data.nama = hasil;
 }


 function myBtn() {
     var tugas = document.getElementById("tgs").value * 0.4;
     var uts = document.getElementById("uts").value * 0.3;
     var uas = document.getElementById("uas").value * 0.3
     var total = tugas + uts + uas;
     var hasil = document.getElementById("akhir");
     hasil.value = total;

     data.total = total

     if (total > 60) {
         var status = ' lulus'
     } else {
         status = ' tidak lulus'
     }

     data.status = status

     var output = document.getElementById("output")
     output.innerHTML = `<table border="1px solid black">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Nilai Akhir</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>${data.nim}</td>
                    <td>${data.nama}</td>
                    <td>${data.total}</td>
                    <td>${data.status}</td>
                </tr>
            </table>`

 }