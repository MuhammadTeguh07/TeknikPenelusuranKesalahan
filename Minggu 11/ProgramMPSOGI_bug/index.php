
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Flow Shop Problem | PSO & MPSO-GI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/css/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="form.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>F</b>SP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Flow Shop</b> Problem</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/img/081411631038.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Shof Rijal Ahlan R.</p>
		  <p>Revised by Eto Wuryanto</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">DASHBOARD</li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-bars"></i> <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="form.php"><i class="fa fa-edit"></i>Input Data & Parameter</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Data & Parameter
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Input Data & Parameter</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Input Data dan Parameter (PSO & MPSO-GI)</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="test.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="userfile">Input Data Flow Shop</label>
                  <input type="hidden" name="MAX_FILE_SIZE" value="30000">
                  <input type="file" name="userfile">
                  <p class="help-block">Data dalam format.xls / .xlsx <br> Data berupa angka, kolom adalah mesin, baris adalah pekerjaan <br>
                  Contoh Data <a href="data/Contoh.xlsx" download>Download </a></p>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="c1">Parameter C1</label>
                  <input type="text" class="form-control" name="C1" id="c1" placeholder="Parameter C1" onkeypress="var key = event.keyCode || event.charCode; return ((key  >= 48 && key  <= 57) || key == 8 || key == 43 || key == 46);" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="c2">Parameter C2</label>
                  <input type="text" class="form-control" name="C2" id="c2" placeholder="Parameter C2" onkeypress="var key = event.keyCode || event.charCode; return ((key  >= 48 && key  <= 57) || key == 8 || key == 43 || key==46);" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="partikel">Partikel</label>
                  <input type="text" class="form-control" name="partikel" id="partikel" placeholder="Jumlah Partikel" onkeypress="var key = event.keyCode || event.charCode; return ((key  >= 48 && key  <= 57) || key == 8 || key == 43);" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="iterasi">Iterasi</label>
                  <input type="text" class="form-control" name="iterasi" id="iterasi" placeholder="Jumlah Iterasi" onkeypress="var key = event.keyCode || event.charCode; return ((key  >= 48 && key  <= 57) || key == 8 || key == 43);" required>
                </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <center>
                <button type="submit" class="btn btn-primary" name="kirim" value"kirim">Submit</button>
                </center>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="assets/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/js/demo.js"></script>

</body>

<script type="text/javascript">
  var elBrowse  = document.getElementById("upload");
    elBrowse.addEventListener("change", function() {
      var files  = this.files;
      var errors = "";
      if (!files) {
        errors += "File upload not supported by your browser.";
      }
      if (files && files[0]) 
      {
        for(var i=0; i<files.length; i++) 
        {
          var file = files[i];
          if ( (/\.(xls|xlsx)$/i).test(file.name) ) 
          {
            readImage( file ); 
          } 
          else 
          {
            errors += file.name +" is unsupported document extension\n";
            document.getElementById("upload").value = null;  
          }
        }
      }
      if (errors) {
        alert(errors); 
      }
    });
</script>

</html>




