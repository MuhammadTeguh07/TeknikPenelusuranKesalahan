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

<script>
$(document).ready(function(){});
function getRuang2(){
var t = $('#ruang1').val();
	$.ajax({
		url: "getRuang.php?t="+t,
		success: function(msg){
			$('.dtl').html(msg);
		},
		dataType: "html"
		});
}


</script>
</head>
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
<?php
$sql = mysqli_query($koneksi,"SELECT ru.KODERU,r.KODERUANG,r2.KODERUANG FROM ruangujian ru JOIN ruangan r ON r.KODERUANG = ru.KODERUANG1 JOIN ruangan r2 ON r2.KODERUANG = ru.KODERUANG2 WHERE KODERU='$_GET[koderu]'") or die (mysqli_error($koneksi));
mysqli_select_db($koneksi,$nama_db) or die("Gagal memilih database!");
$row=mysqli_fetch_array($sql);
//substr(string,start,length) 
//echo "kd_ruang : ".$urut_kd." === <br />";
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <h1 class="page-header">Ruang Ujian</h1>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Masukkan Data Ruang Ujian
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="post" action="update_ruangujian.php" style="font-size:16px">
<div class="form-group">
<label>KODE Ruang Ujian</label>
<input class="form-control" type="text" name="koderuangujian" maxlength="20" autofocus required value="<?php  echo $row[0]; ?>" readonly/><br>
</div>
<div class="form-group">
<label>Kode Ruang Ujian 1</label>
<input class="form-control" type="text" name="ruang1" maxlength="6" required value="<?php  echo $row[1]; ?>"/><br>
<!-- <select class="form-control" name="ruang1" id="ruang1" onchange="getRuang2();" required>
     <option value="null" selected="selected">-- Pilih --</option>
                <?php				
		$q5 = mysqli_query($koneksi,"SELECT * FROM ruangan order by namaruangan") or die (mysql_error());		
        //$q5 = mysql_query("select * from ruangan") or die (mysql_error());
        while($b5 = mysqli_fetch_array($q5)){
            echo "<option value='".$b5[0]."'>".$b5[3]."</option>";
        }
                ?>

</select><br> -->
</div>
<div class="form-group">
<label>Kode Ruang Ujian 1</label>
<input class="form-control" type="text" name="ruang2" maxlength="6" required value="<?php  echo $row[2]; ?>"/><br>
</div>
<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Perbarui </button>
<a href="insertview_ruangujian.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Batal</button></a>
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
                            Data Fakultas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php
echo "<table width='100%' class='table table-striped table-bordered table-hover' id='dataTables-example'>";
echo "<thead>";
echo "<tr>";
    echo "<th style='width:60px'>No. </th>";
    echo "<th>Kode Ruangan </th>";
    echo "<th>Nama Ruangan</th>";
    echo "<th>Kapasitas Ruang</th>";
    echo "<th>Kapasitas Ujian</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
$sql = mysqli_query($koneksi, "SELECT * FROM ruangan") or die (mysqli_error($koneksi));
mysqli_select_db($koneksi, $nama_db) or die("Gagal memilih database!");
$no = 0;
while ($row = mysqli_fetch_array($sql)){
    $no = $no+1;
?>
    <tr>
        <td> <?php echo $no."."; ?> </td>
        <td><?php echo $row['KODERUANG'];?></td>
        <td><?php echo $row['NAMARUANGAN'];?></td>
        <td><?php echo $row['KAPASITASRUANG'];?></td>
        <td><?php echo $row['kapasitasujian'];?></td>
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
