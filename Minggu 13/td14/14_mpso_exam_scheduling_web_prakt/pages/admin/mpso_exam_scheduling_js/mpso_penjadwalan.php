<?php
session_start();
include('../../../koneksi.php');
if (!isset($_SESSION['username']) || empty($_SESSION['username']) || !isset($_SESSION['jabatan']) || empty($_SESSION['jabatan']) || $_SESSION['jabatan']!="jab001"){
echo "<META http-equiv='refresh' content='0;URL=../../../logout.php'>";
        }
echo "<META http-equiv='refresh' content='1800;URL=../../../logout.php'>";
$nama = $_SESSION['namapegawai'];
$jabatan = $_SESSION['jabatan'];
$sql=mysqli_query($koneksi,"select namajabatan from jabatan where kodejabatan='$jabatan'");
$row=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Cache-control" content="no-cache">

    <title>Fakultas Vokasi Universitas Airlangga</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../../../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../../../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script type="text/javascript" src="../../../include/jquery-3.2.1.min.js"></script>
</head>
<script>
$(document).ready(function(){});
function getPd(){
var t = $('#fakultas').val();
$.ajax({
    url: "getPd.php?t="+t,
    success: function(msg){
        console.log(msg);
        $('.prodi').html(msg);
    },
    dataType: "html"
    });
}
</script>
<?php
$baca_penjadwalan = mysqli_query($koneksi,"SELECT * FROM penjadwalan ORDER BY kodejadwal DESC limit 1");
$kd_penjadwalan_row = mysqli_fetch_array($baca_penjadwalan);
if(count($kd_penjadwalan_row) == 0) $urut_kd = "00"."1";
else {
    $kd_penjadwalan = $kd_penjadwalan_row[0];
    $urut_kd_no = substr($kd_penjadwalan,3,strlen($kd_penjadwalan))+1;
    $urut_kd = "00".$urut_kd_no;
}
//substr(string,start,length) 
//echo "kd_ruang : ".$urut_kd." === <br />";
?>
<body>
    <div id="wrapper">

        <!-- Navigation -->

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Fakultas Vokasi Universitas Airlangga</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->

                <!-- /.dropdown -->

                <!-- /.dropdown -->
                <li class="dropdown">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $row['namajabatan'];?></a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../../../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>

                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <?php include("../sidebaradmin.php")?>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <h1 class="page-header">Data Penjadwalan Ujian Dengan M-PSO</h1>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Masukkan Data Penjadwalan Ujian
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="post" action="insertjadwal.php" style="font-size:16px">
                                        <div class="form-group">
<label>Kode Jadwal</label>
<input class="form-control" type="text" name="kodejadwal" maxlength="20" autofocus required value="jwl<?php  echo $urut_kd; ?>" readonly/><br>
</div>
<div class="form-group">
<label>Fakultas</label>
<select class="form-control" name="fakultas" id="fakultas" required onchange="getPd();">
     <option value="null" selected="selected">-- Pilih --</option>
        <?php
        $queryfakultas = mysqli_query($koneksi,"select kodefakultas, namafakultas from fakultas group by kodefakultas") or die (mysqli_error($koneksi));
        //$satuan = $queryjabatan['namajabatan'];
        while($barisfakultas = mysqli_fetch_array($queryfakultas)){
            echo "<option value='".$barisfakultas['kodefakultas']."'>".$barisfakultas['namafakultas']."</option>";
        }
        ?>
</select><br>
</div>

<div class="form-group">
<label>Program Studi</label>
<div class="prodi">Pilih Fakultas</div><br>
</div>

<div class="form-group">
<label>Tahun Ajaran</label>
<select class="form-control" name="kodethnajaran" required>
     <option value="-" selected="selected">-- Pilih --</option>
        <?php
        $querytahun = mysqli_query($koneksi,"select distinct kodethnajaran, tahunajaran from tahunajaran order by tahunajaran desc limit 3") or die (mysql_error($koneksi));
        //$satuan = $queryjabatan['namajabatan'];
        while($baristahun = mysqli_fetch_array($querytahun)){
            echo "<option value='".$baristahun['kodethnajaran']."'>".$baristahun['tahunajaran']."</option>";
        }
        ?>
</select>
<br><a href="../master/insertview_tahunajar.php">Add Tahun Ajaran</a>
</div>

<div class="form-group">
<label>Semester</label>
<select class="form-control" name="kodesemester" required>
     <option value="" selected="selected">-- Pilih --</option>
        <?php
	   $querysemester = mysqli_query($koneksi,"select * from semester") or die (mysql_error($koneksi));       
	   while($barissemester = mysqli_fetch_array($querysemester)){
            echo "<option value='".$barissemester[0]."'>".$barissemester[1]."</option>";
        }
        ?>
</select><br>
</div>

<div class="form-group">
<label>Masa Ujian</label>
<select class="form-control" name="masaujian" required>
    <option value="null" selected="selected">-- Pilih --</option>
    <option value="0">UTS</option>
    <option value="1">UAS</option>
</select><br>
</div>

<button type="submit">Simpan</button>
<button type="reset">Reset</button>
</form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Penjadwalan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php
echo "<table width='100%' class='table table-striped table-bordered table-hover' id='dataTables-example'>";
echo "<thead>";
echo "<tr>";
    echo "<th style='width:60px'>No. </th>";
    echo "<th>Pegawai</th>";
    echo "<th>Fakultas - Prodi</th>";
    echo "<th>Tanggal</th>";
    echo "<th>Semester</th>";
    echo "<th>Masa Ujian</th>";
    echo "<th>Status</th>";
    echo "<th>Status Pakai</th>";
    echo "<th>Aksi</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
$sql = mysqli_query($koneksi, 'SELECT p.NAMAPEGAWAI, CONCAT(f.NAMAFAKULTAS," - ",pr.NAMAPRODI), pd.tanggal,CONCAT(s.NAMASEMESTER,", ",th.tahunajaran),
CASE
    WHEN pd.masaujian = 0 THEN "UTS"
    WHEN pd.masaujian = 1 THEN "UAS"
    ELSE "UTS"
END,pd.STATUS,
CASE
    WHEN pd.statuspakai = 0 THEN "Tidak dipakai"
    WHEN pd.statuspakai = 1 THEN "Pakai"
    ELSE "Tidak dipakai"
END,pd.KODEJADWAL,pd.STATUSPAKAI
FROM penjadwalan pd 
JOIN pegawai p ON p.NIP = pd.NIP 
JOIN fakultas f ON f.KODEFAKULTAS = pd.kodefakultas 
JOIN prodi pr on pr.KODEPRODI = pd.kodeprodi 
JOIN semester s on s.KODESEMESTER = pd.KODESEMESTER 
JOIN tahunajaran th on th.KODETHNAJARAN = pd.KODETHNAJARAN') or die (mysqli_error($koneksi));
mysqli_select_db($koneksi, $nama_db) or die("Gagal memilih database!");
$no = 0;
while ($row = mysqli_fetch_array($sql)){
    $no = $no+1;
?>
    <tr>
        <td><?php echo $no."."; ?></td>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
        <td><?php echo $row[3];?></td>
        <td><?php echo $row[4];?></td>
        <td><?php echo $row[5];?></td>
        <td><?php echo $row[6];?></td>
        <td><a href="penjadwalan_mpso.php?kodejadwal=<?php echo $row[7]; ?>&statuspakai=<?php echo $row[8]; ?>"><button> Penjadwalan m-pso</button></a>
            <a href="detailjadwal.php?kd=<?php echo $row[7]; ?>"><button> Detail</button></a>
            <a href="ubahpakaijadwal.php?kodejadwal=<?php echo $row[7]; ?>"><button> Tidak pakai</button></a>
        </td>
    </tr>
<?php
}
echo "</tbody>";
echo "</table>";
?>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../../vendor/raphael/raphael.min.js"></script>
    <script src="../../../vendor/morrisjs/morris.min.js"></script>
    <script src="../../../data/morris-data.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../../../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../../../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../../dist/js/sb-admin-2.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
