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
    <!-- Select2 -->
    <link rel="stylesheet" type="text/css" href="../../../vendor/select2-4.0.3/css/select2.min.css">

    <!-- Custom Fonts -->
    <link href="../../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</script> 
</head>

<body>
    <?php
        $baca_ruang = mysqli_query($koneksi, "SELECT * FROM labkomujian ORDER BY KODELABUJIAN DESC limit 1");
        $kd_ruang_row = mysqli_fetch_array($baca_ruang);
        if(count($kd_ruang_row) == 0){
            $urut_kd = "1";
        }
        else {
            $kd_ruang = $kd_ruang_row[0];
            $urut_kd_no = $kd_ruang+1;
            $urut_kd = $urut_kd_no;
        }
    ?>

    <div id="wrapper">
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
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $row['namajabatan'];?></a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../../../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </li>
            </ul>
            <?php include("../sidebaradmin.php")?>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Labkom Ujian</h1>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Masukkan Data Ruang Ujian
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form method="post" action="insertLabkomUjian.php" style="font-size:16px">
	                                        <div class="form-group">
                                                <label>Kode Labkom Ujian </label>
                                                <input class="form-control" type="number" name="kodeLU" value="<?php  echo $urut_kd; ?>" readonly><br>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Labkom</label>
                                                <select class="form-control" name="namalab" id="namalab" required>
                                                    <option value="-" selected="selected">-- Pilih --</option>
                                                    <?php       
		                                                $querythn = mysqli_query($koneksi,"SELECT KODELAB,NAMALAB from labkom") or die (mysqli_error());		
                                                        while($baristhn = mysqli_fetch_array($querythn)){
                                                            echo "<option value='".$baristhn['KODELAB']."'>".$baristhn['NAMALAB']."</option>";
                                                        }
                                                    ?>
                                                </select>
                                                <br>
                                            </div>
                                            <div class="form-group">
                                                <label>Tahun Ajaran </label>
                                                <select class="form-control" name="kodethnajaran" required>
                                                    <?php        
		                                                $querythn = mysqli_query($koneksi,"select * from tahunajaran order by tahunajaran desc") or die (mysqli_error());		
                                                        while($baristhn = mysqli_fetch_array($querythn)){
                                                            echo "<option value='".$baristhn[0]."'>".$baristhn[1]."</option>";
                                                        }
                                                    ?>
                                                </select>
                                                <br>
                                                <a href="../master/insertview_tahunajar.php">Add Tahun Ajaran</a>
                                            </div>
                                            <div class="form-group">
                                                <label>Semester</label>
                                                <select class="form-control" name="kodesemester" id="kodesemester" required>
                                                    <option value="-" selected="selected">-- Pilih --</option>
                                                    <?php
		                                                $querysem = mysqli_query($koneksi,"select * from semester") or die (mysqli_error());
                                                        while($barissem = mysqli_fetch_array($querysem)){
                                                            echo "<option value='".$barissem[0]."'>".$barissem[1]."</option>";
                                                        }
                                                    ?>
                                                </select>
                                                <br>
                                            </div>
                                            <button type="submit">Simpan</button>
                                            <button type="reset">Reset</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Data Labkom Ujian
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <?php
                                    echo "<table width='100%' class='table table-striped table-bordered table-hover' id='dataTables-example'>";
                                    echo "<thead>";
                                    echo "<tr>";
                                        echo "<th style='width:60px'>No. </th>";
                                        echo "<th>Kode Labkom Ujian</th>";
                                        echo "<th>Nama Labkom</th>";
                                        echo "<th>Kode Tahun Ajaran</th>";
                                        echo "<th>Kode Semester</th>";
                                        echo "<th>Aksi</th>";
                                    echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";

                                    $sql = mysqli_query($koneksi,"SELECT lu.KODELABUJIAN, l.KODELAB, l.NAMALAB, t.KODETHNAJARAN, s.KODESEMESTER FROM labkom l, tahunajaran t, semester s, labkomujian lu
                                    WHERE lu.KODELAB=l.KODELAB AND lu.KODETHNAJARAN=t.KODETHNAJARAN AND lu.KODESEMESTER=s.KODESEMESTER ORDER BY KODELABUJIAN ASC") or die (mysqli_error($koneksi));

                                    mysqli_select_db($koneksi,$nama_db) or die("Gagal memilih database!");

                                    $no = 0;
                                    while ($row = mysqli_fetch_array($sql)){
                                        $no++;

                                ?>
                                <tr>
                                    <td> <?php echo $no.".";?> </td>
                                    <td><?php echo $row['KODELABUJIAN']; ?> </td>
                                    <td><?php echo $row['NAMALAB']; ?> </td>
                                    <td><?php echo $row['KODETHNAJARAN'];?></td>
                                    <td><?php echo $row['KODESEMESTER'];?></td>
                                    <td>
                                        <a href="editLabkomUjian.php?KODELABUJIAN=<?php echo $row['KODELABUJIAN'];?>"><button> Ubah</button></a>
                                        <a href="deleteLabkomUjian.php?KODELABUJIAN=<?php echo $row['KODELABUJIAN'];?>"><button> Hapus</button></a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                    echo "</tbody>";
                                    echo "</table>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../vendor/jquery/jquery.js"></script>
    <script src="../../../vendor/jquery/jquery-migrate-3.0.0.js"></script>
     <!-- jQuery Chained -->
   	<script src="../../../vendor/jquery/jquery.chained.js"></script>

    <!-- Select2 -->
    <script src="../../../vendor/select2-4.0.3/js/select2.full.min.js"></script>


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
            //Initialize Select2 Elements
    });
    </script>


</body>

</html>
