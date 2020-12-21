<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Menambah bilangan secara otomatis</title>
    </head>
    <body>
        <script type="text/javascript">
            function tambah(){
                //nilai pertamaa
                var nilai1=document.getElementById("val1").value;
                //nilai kedua
                var nilai2=document.getElementById("val2").value;
                //operasi tambah
                var tambah=parseInt(nilai1)+parseInt(nilai2);
                //menampilkan hasil tambah
                document.getElementById("hasil").value=parseInt(tambah);
            }
            function refresh(){
                //mengosongkan form
                document.getElementById("val1").value="";
                document.getElementById("val2").value="";
                document.getElementById("hasil").value="";
            }
        </script>
        <h2>Program Menambah Bilangan Secara Otomatis</h2>
		<form class="form-horizontal" method="POST" action="proses-input-datalulusan.php" enctype="multipart/form-data">
        <input type="text"name="n1"id="val1" onkeyup="tambah()" maxlength="15"> +
        <input type="text"name="n2"id="val2" onkeyup="tambah()"maxlength="15">
        =<input type="text"id="hasil">
        <input type="button" value="Clear"onclick="refresh()">
		</form>
    </body>
</html>