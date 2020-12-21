<?php
session_start();
include('../../koneksi.php');
if (!isset($_SESSION['username']) || empty($_SESSION['username']) || !isset($_SESSION['jabatan']) || empty($_SESSION['jabatan']) || $_SESSION['jabatan']!="jab001"){
echo "<META http-equiv='refresh' content='0;URL=../../logout.php'>";
        }
echo "<META http-equiv='refresh' content='1800;URL=../../logout.php'>";
$nama = $_SESSION['namapegawai'];
$jabatan = $_SESSION['jabatan'];
$sql=mysqli_query($koneksi, "select namajabatan from jabatan where kodejabatan='$jabatan'");
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
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <table>
                    <tr>
                        <td><img src="../../151230085413_Logo-UNAIR.png" width="70" height="50" alt=""></td>
                        <td> <a class="navbar-brand" href="index.php">Fakultas Vokasi Universitas Airlangga</a> </td>
                    </tr>
                </table>

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
                    <li><a href="../../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Halaman Utama</a>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Data Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="master/insertview_pegawai.php">Pegawai</a>
                                </li>
                                <li>
                                    <a href="master/insertview_fakultas.php">Fakultas</a>
                                </li>
                                <li>
                                    <a href="master/insertview_prodi.php">Prodi</a>
                                </li>
                                <li>
                                    <a href="master/insertview_matkul.php">Matakuliah</a>
                                </li>
                                <li>
                                    <a href="master/insertview_ruangan.php">Ruangan</a>
                                </li>
                                <li>
                                    <a href="master/insertview_kelas.php">Kelas</a>
                                </li>
                                <li>
                                    <a href="master/insertview_tahunajar.php">Tahun Ajaran</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<li>
                                    <a href="transaksi/matkul_trans_insertview.php">Penawaran Mata Kuliah</a>
                                </li>
                                <li>
                                    <a href="transaksi/insertview_bagidosen.php">Pembagian Dosen</a>
                                </li>
                                <li>
                                    <a href="transaksi/insertview_trans_kelas.php">Pembagian Kelas</a>
                                </li>
                                <li>
                                    <a href="transaksi/insertview_jadwal.php">Penjadwalan</a>
                                </li>	
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>MPSO exam_scheduling<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="mpso_exam_scheduling_js/indexRuangUjian.php">Ruang Ujian</a>
                                </li>
                                <li>
                                    <a href="mpso_exam_scheduling_js/indexLabkomUjian.php">Labkom Ujian</a>
                                </li>
                            	<li>
                                    <a href="mpso_exam_scheduling_js/indexPengawasDosen.php">Pengawas Dosen</a>
                                </li>
                                <li>
                                    <a href="mpso_exam_scheduling_js/indexPengawasPegawai.php">Pengawas Pegawai</a>
                                </li>
                                <li>
                                    <a href="mpso_exam_scheduling_js/indexPenjadwalan.php">Penjadwalan dengan M-PSO</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="transaksi/laporan_sms.php">Laporan Jadwal Semester</a>
                                </li>
                                <li>
                                   <a href="transaksi/laporan_dsn.php">Laporan Jadwal Dosen</a>
                                </li>
                                <li>
                                    <a href="transaksi/laporan_hari.php">Laporan Jadwal Harian</a>
                                </li>
                                <li>
                                    <a href="transaksi/laporan_ruang.php">Laporan Jadwal Ruang</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="notifications.html">Ubah Password</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

            </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Selamat datang <?php echo $nama?></h1>
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
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../vendor/raphael/raphael.min.js"></script>
    <script src="../../vendor/morrisjs/morris.min.js"></script>
    <script src="../../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

</body>

</html>
