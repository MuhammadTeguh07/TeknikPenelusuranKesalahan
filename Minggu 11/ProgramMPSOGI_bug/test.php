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
  <!-- <link rel="stylesheet" href="assets/css/fontawesome.min.css"> -->
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
      <!-- /.search form -->
     <!--  sidebar menu: : style can be found in sidebar.less -->
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
            <li class="active"><a href="form.php"><i class="fa fa-edit"></i>Input Data &  Parameter</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Penyelesaian Masalah Flow Shop
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Algoritma PSO</b></h3>
            </div>
            <div id="Iter" style="margin-left: 10px; font-size: 12pt;"></div>
            <div id="UrutanPSO" style="margin-left: 10px; font-size: 12pt;"></div>
            <div id="pso1" style="margin-left: 10px; font-size: 12pt;"></div>
            <div id="makePSO" style="margin-left: 10px; font-size: 12pt;"></div>
            <div id="pso2" style="margin-left: 10px; font-size: 12pt;"></div>
             <div id="pso3" style="margin-left: 10px; font-size: 12pt;"></div>
          </div>
          <!-- /.box -->
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Algoritma MPSO-GI</b></h3>
            </div>
            <div id="Iter2" style="margin-left: 10px; font-size: 12pt;"></div>
            <div id="UrutanMPSO" style="margin-left: 10px; font-size: 12pt;"></div>
            <div id="mpso1" style="margin-left: 10px; font-size: 12pt;"></div>
            <div id="makeMPSO" style="margin-left: 10px; font-size: 12pt;"></div>
            <div id="mpso2" style="margin-left: 10px; font-size: 12pt;"></div>
             <div id="mpso3" style="margin-left: 10px; font-size: 12pt;"></div>
          </div>
          <!-- /.box -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
  </aside>
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
		<?php
			
			$uploaddir = 'data/';
			$uploadfile = $uploaddir.basename($_FILES['userfile']['tmp_name']);
			if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
			    //echo "File is valid, and was successfully uploaded.\n";
			} else {
			    echo "Possible file upload attack!\n";
			}

			require 'vendor/autoload.php';

			use PhpOffice\PhpSpreadsheet\Spreadsheet;
			use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

			$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($uploadfile);
			$reader->setReadDataOnly(true);
			$spreadsheet = $reader->load($uploadfile);

			$data = $spreadsheet->getActiveSheet()->toArray();


			$c1 = $_POST["C1"];
			$c2 = $_POST["C2"];
			$partikel = $_POST["partikel"];
			$Iter = 1;
			$maxIter = $_POST["iterasi"];

		?>
	</body>
	<script type="text/javascript">
		var dataawal = <?php echo json_encode($data)?>;
		var c1 = <?php echo $c1?>;
		var c2 = <?php echo $c2?>;
		var partikel = <?php echo $partikel?>;
		
		var t0 = performance.now();
		var Iter = 1;
		var maxIter = <?php echo $maxIter?>;
		var posLama = randPartPosisi(dataawal, partikel);
		var posLama2 = copyD(posLama);
		var kecLama = randPartKecepatan(dataawal, partikel);
		var databaru = pengkodeanJobs(posLama, partikel);
		var sol = solusiJobs(dataawal, databaru);
		var makespan = hitungMakeSpan(sol);
		var best = posisiPbestGbest(makespan);
		var kecBaru;
		var posBaru;
		var posBaru2 = posLama2;
		var dataupdate;
		var solUpdate;
		var makespanbaru;
		var bestbaru;
		var update;
		var updatePos;

		while(Iter<=maxIter){
			//document.write("<br> Iterasi ke "+Iter+"<br>");
			kecBaru = hitungKecepatanBaru(kecLama, posLama2, posBaru2, c1, c2, best);
			posBaru = hitungPosisiBaru(posLama2, kecBaru);
			posBaru2 = copyD(posBaru);
			dataupdate = pengkodeanJobs(posBaru, partikel);
			solUpdate = solusiJobs(dataawal, dataupdate);
			makespanbaru = hitungMakeSpan(solUpdate);
			bestbaru = posisiPbestGbest(makespanbaru);
			update = updateBest(best, bestbaru, posLama2, dataupdate);
			updatePos = updatePosisi(best, bestbaru, posLama2, posBaru2);
			bestbaru = best;
			best = update;
			posBaru2 = posLama2;
			posLama2 = updatePos;
			kecLama = kecBaru;
			Iter++;
		}
		var dataakhir = pengkodeanJobs(updatePos, partikel);
		var solakhir = solusiJobs(dataawal, dataakhir);
		var dt=dataakhir[update[update.length-1]];
		var IterAkhirPSO = ("Iterasi : "+(Iter-1));
		document.getElementById("Iter").innerHTML=IterAkhirPSO;
		document.getElementById("UrutanPSO").innerHTML="Urutan : ";
		
		dt.map((item, index)=>{
			var data = 'J'+(item+1)+' ';
			var textnode = document.createTextNode(data);         
			document.getElementById("pso1").appendChild(textnode);
		})
		
		document.getElementById("makePSO").innerHTML="Make-Span : ";
		var MSPso = update[update[update.length-1]];
		document.getElementById("pso2").innerHTML=MSPso;
		var t1 = performance.now();
		var runtimePSO = (t1-t0);
		document.getElementById("pso3").innerHTML="Computational Cost : "+runtimePSO+" milliseconds.";
		//console.log("Call to PSO " + (t1 - t0) + " milliseconds.");

		var t0M = performance.now();
		var IterM = 1;
		var maxIterM = <?php echo $maxIter?>;
		var posLamaM = randPartPosisi(dataawal, partikel);
		var posLama2M = copyD(posLamaM);
		var kecLamaM = randPartKecepatan(dataawal, partikel);
		var databaruM = pengkodeanJobs(posLamaM, partikel);
		var solM = solusiJobs(dataawal, databaruM);
		var makespanM = hitungMakeSpan(solM);
		var bestM = posisiPbestGbest(makespanM);
		var kecBaruM;
		var posBaruM;
		var posBaru2M = posLama2M;
		var dataupdateM;
		var solUpdateM;
		var makespanbaruM;
		var bestbaruM;
		var updateM;
		var updatePosM;

		while(IterM<=maxIterM){
				kecBaruM = hitungKecepatanBaruModify(kecLamaM, posLama2M, posBaru2M, IterM, maxIterM, bestM);
				posBaruM = hitungPosisiBaru(posLama2M, kecBaruM);
				posBaru2M = copyD(posBaruM);
				dataupdateM = pengkodeanJobs(posBaruM, partikel);
				solUpdateM = solusiJobs(dataawal, dataupdateM);
				makespanbaruM = hitungMakeSpan(solUpdateM);
				bestbaruM = posisiPbestGbest(makespanbaruM);
				updateM = updateBest(bestM, bestbaruM, posLama2M, dataupdateM);
				updatePosM = updatePosisi(bestM, bestbaruM, posLama2M, posBaru2M);
				updatePosMCopy = copyD(updatePosM);
				bestbaruM = bestM;
				bestM = updateM;
				posBaru2M = posLama2M;
				posLama2M = updatePosM;
				kecLamaM = kecBaruM;
				IterM++
		}
	
		var dataakhirM = pengkodeanJobs(updatePosMCopy, partikel);
		var solakhirM = solusiJobs(dataawal, dataakhirM);
		var dtM=dataakhirM[updateM[updateM.length-1]];
		var IterAkhirMPSO = ("Iterasi : "+(IterM-1));
		document.getElementById("Iter2").innerHTML=IterAkhirMPSO;
		document.getElementById("UrutanMPSO").innerHTML="Urutan : ";
		dtM.map((item, index)=>{
			var data = 'J'+(item+1)+' ';
			var textnode = document.createTextNode(data);         
			document.getElementById("mpso1").appendChild(textnode);
		})
	
		document.getElementById("makeMPSO").innerHTML="Make-Span : ";
		var MSmpso = updateM[updateM[updateM.length-1]];
		document.getElementById("mpso2").innerHTML=MSmpso;
		var t1M = performance.now();
		var runtimeMPSO = (t1M-t0M);
		document.getElementById("mpso3").innerHTML="Computational Cost : "+runtimeMPSO+" milliseconds.";
		//console.log("Call to MPSO-GI " + (t1M - t0M) + " milliseconds.");


//	IterAkhirMPSO
//			var n = dtM.length;
//		for(var i=0;i<n;i++) {
//			if(i<n-1) document.write(dtM[i]+" ");
//				else document.write(dtM[i]);
//			}
//	MSmpso	
// runtimeMPSO



		function viewData(){
					dataawal.map(function(item, index){
					//document.write("J"+(index+1)+" "+item+"<br>");
				})
					
				//document.write("<br>");
			}
		
		function randPartPosisi(data, partikel){
			var randposisi = new Array();
			var bb = 1;
			var bt = data.length; 
			  for (var i=0; i<partikel;i++)
			  {
			  	randposisi[i] = [];
			  	//document.write("Posisi Partikel "+(i+1)+"<br>");
			  	for (var j=0; j < data.length ; j++) { 
			  		var acak = (bb+(bt-bb)*Math.random()); //nomor hasil random antara 1-60
		  			randposisi[i][j] = acak;
		  			/*document.write("J"+(j+1)+" "+randposisi[i][j]);
		  			document.write(" <br>");*/
				}
				//document.write("<br>")
			  }
			  //document.write("<br>");
			  return randposisi;
		}
		function copyD(x){
			var copydata = new Array ();

						for (var d=0; d < x.length ; d++) { 
							copydata[d] = [];
						for (var j=0; j < x[0].length ; j++){
						copydata[d][j]=x[d][j];				
					} 
						

					}
					return copydata;
					}
				
		
		function pengkodeanJobs(data, partikel){
			var sorting = new Array();
			var posisiAwal= new Array();
			var Urutan = new Array();
			//document.write("Urutan Solusi <br>");
			for (var x = 0; x <partikel; x++) {
				Urutan[x] = [];
				
			
			for (var d=0; d < data[x].length ; d++) { 
				sorting[d]=d;
				
			}
			for (var i=0; i < data[x].length; i++) {
				posisiAwal[i]=data[x][i]; 
			}

			for (var a=0; a < data[x].length; a++) { 
				var z = data[x][a]; //temp pos awal
				var p = a;			//temp lokasi array posisi

				for (var j=a+1; j < data[x].length ; j++) { 
					if (z>data[x][j]) {
						z = data[x][j];
						p = j;
					}
				}

				if(a==data[x].length-1){
				data[x][a] = z;
				sorting[a] = p;
				}

				else{
				data[x][p] = data[x][a];
				data[x][a] = z;
				var y= sorting[a] ; //temp sorting swap
				sorting[a] = sorting[p];
				sorting[p] = y;
				}
				

			}
			for (var b=0; b < sorting.length ; b++) { 
				for (var c=0; c < sorting.length ; c++){
					if(data[x][b]==posisiAwal[c])
						sorting[b]=c;

			} 
				
		}
		for (var e = 0; e < sorting.length; e++) {
			var posisi = 0;
			var ketemu = false;
			var f = 0;
			while (ketemu==false) {
				if(sorting[f]==e){
					ketemu = true;
					posisi = f;				
				}
				f++;
			}
			Urutan[x][e] = posisi;
			//document.write("J"+(Urutan[x][e]+1)+" - ");
		}
/*		document.write("<br>");
		document.write("<br>");*/
			}
			return Urutan;
				}

		function randPartKecepatan(data, partikel){
			var randKecepatan = new Array(); //untuk array nomor pertanyaan yang valid(tidak kembar)
			var bb = 1;
			  var bt = data.length;
			  var a = bt-bb;
			  for (var i=0; i< partikel; i++)
			  {
			  	randKecepatan[i] = [];
			  	//document.write("Kecepatan Partikel "+(i+1)+"<br>");
			  	for (var j=0;  j <  data.length ;  j++) { 
			  		var acak = ((-a)+(a-(-a))*Math.random()); //nomor hasil random antara 1-60
			  		  	randKecepatan[i][j] =  acak;
			  		  	//document.write("J"+(j+1)+" "+randKecepatan[i][j]+" <br>");
			}
			//document.write("<br>")
			  }
			  //document.write("<br>")
			  return  randKecepatan;

		}
		function solusiJobs(dataasli, databaru){
			var solusi = new Array();
			for (var i=0; i < databaru.length; i++) { 
				solusi[i]=[]

				for (var j=0; j < databaru[0].length ; j++) { 
					solusi[i][j] = [];
					solusi[i][j][0] = databaru[i][j]+1;
					for (var k=1; k <= dataasli[0].length ; k++) { 
						solusi[i][j][k] = dataasli[databaru[i][j]][k-1];
						//document.write(solusi[i][j][k]+" ");

					}
					//document.write("<br>");
				}
				//document.write("<br>");
				
			}
			return solusi;

		}
		function hitungMakeSpan(data){
			var dataMS = new Array();
			for (var k=0; k < data.length ; k++) {
				dataMS[k]=[]; 
				//document.write("Perhitungan Makespan Solusi ke"+(k+1)+"<br>");
				for (var i=0; i < data[0].length ; i++) { 
					dataMS[k][i] = [];
					for (var j=0; j < data[0][0].length-1 ; j++) { 
						dataMS[k][i][j] = [];
						dataMS[k][0][0] = data[k][0][1];
						if (i==0&&j>=1) {
							dataMS[k][i][j] = data[k][i][j+1]+dataMS[k][i][j-1];
						}
						else if (i>=1 && j==0) {
							dataMS[k][i][j] = data[k][i][j+1]+dataMS[k][i-1][j];
						}
						else if(i>=1&&j>=1){
							dataMS[k][i][j] = (Math.max(dataMS[k][i-1][j], dataMS[k][i][j-1])) + data[k][i][j+1];
							
							}
							//document.write(dataMS[k][i][j]+" ");

						}
						//document.write("<br>");

			
					}
					//document.write("<br>");
				}
				for (var i = 0; i < dataMS.length; i++) {
					//document.write("Makespan Solusi ke "+(i+1)+" = "+dataMS[i][dataMS[0].length-1][dataMS[0][0].length-1]);
					//document.write("<br>");
					//document.write("<br>");
				}
				
				return dataMS;
				
			}

			function posisiPbestGbest(data){
				var best = new Array();
				for (var i=0; i < data.length ; i++) { 
					best[i] = data[i][data[0].length-1][data[0][0].length-1];
				}
				var max = best[0];
				var posisi = 0;
				for (var j=0; j < best.length ; j++) { 
					if (best[j]<max) {
						max = best[j];
						posisi = j;
					}
				}
				best[best.length] = posisi;
				//document.write(best);
				//document.write("<br>");
				//document.write("<br>");
				return best;
			}

			function hitungKecepatanBaru(datakec, datapos, posbaru, c1, c2, best){
				var KecepatanBaru = new Array();
				var r1 = Math.random();
				var r2 = Math.random();
				for (var i=0; i < datakec.length ; i++) { 
					KecepatanBaru[i] = [];
					//document.write("Kecepatan Baru Partikel "+(i+1)+"<br>");
					for (var j=0; j < datakec[0].length ; j++) {  
							KecepatanBaru[i][j] = datakec[i][j]+c1*r1*((posbaru[i][j]-datapos[i][j]))+c2*r2*((posbaru[best[best.length-1]][j]-datapos[i][j]));
								//document.write(KecepatanBaru[i][j]+" <br>");
						}
						//document.write("<br>");
					}
					
					return KecepatanBaru;
			}

			function hitungKecepatanBaruModify(datakec, datapos, posbaru, iterasi, maxIter, best){
				var KecepatanBaru = new Array();
				var fitness = new Array();
				var gravitasi;
				var worstfit;
				var bestfit;
				var mi = new Array();
				var MassaInersia = new Array();
				var Mb = new Array();
				var Mg;
				var apb = new Array();
				var apg = new Array();
				var sum = 0;
				var r1 = Math.random();
				var r2 = Math.random();	
				for(var b=0;b<best.length-1;b++){
						fitness[b]=best[b];
				}
				for (var a = 0; a < datakec.length; a++) {
					worstfit = Math.max.apply(Math, fitness);
					bestfit = Math.min.apply(Math, fitness);
					//pada perhitungan nilai mi, penyebut ditambah konstanta kecil (acak 0-1) agar menghindari nilai 0 pada penyebut
					//jika nilai mi bernilai 0 maka di gantikan dengan bilangan acak (0-1) agar tidak mempengaruhi nilai Mg dan perhitungan kecepatan baru
					mi[a] = (fitness[a]-worstfit)/(bestfit-worstfit+Math.random());			
					if (mi[a]==0) {
						mi[a] = Math.random();
					}
					else{
						mi[a] = mi[a];
					}
					
				
					sum = sum+mi[a];
			
					MassaInersia[a] = mi[a]/(sum);
					Mb[a] = MassaInersia[a];
				}

				Mg = Math.min.apply(Math, Mb);
			
				for (var i=0; i < datakec.length ; i++) { 
					KecepatanBaru[i] = [];
					//document.write("fitness = "+fitness[i]);
					//document.write("<br>");
					var G0 = 100;
					var alpha = 20
					gravitasi = G0*Math.exp(-alpha*(iterasi/maxIter));
					//Pada perhitungan apb dan apg penyebut ditambhakan dengan konstanta kecil supaya penyebut tidak bernilai 0
					var pos = 0;
					var pos_g=0;
						for (var l = 0; l < datapos[0].length; l++) {
							var p = (datapos[i][l]-posbaru[i][l]);
							p = Math.pow(p,2);
							pos = pos+p;
							pos = Math.sqrt(pos);
							pos2 = Math.pow(pos, 2);
							apb[i] = (gravitasi*Mb[i])/(pos2+Math.random());
					
							var g = (datapos[i][l]-posbaru[best[best.length-1]][l]);
							g = Math.pow(g,2);
							pos_g = pos_g+g;
							pos_g = Math.sqrt(pos_g);
							pos_g2 = Math.pow(pos_g, 2);
							apg[i] = (gravitasi*Mg)/(pos_g2+Math.random());
						}
						
					/*document.write("APB = "+apb[i]);
					document.write("<br>");
					document.write("APG = "+apg[i]);
					document.write("<br>");
					document.write("G = "+gravitasi);
					document.write("<br>");
					document.write("mi= "+mi[i]);
					document.write("<br>");
					document.write("Mb= "+Mb[i]);
					document.write("<br>");
					document.write("Sum ="+sum);
					document.write("<br>");
					document.write("Massa Inersia= "+MassaInersia[i]);
					document.write("<br>");
					document.write("Kecepatan Baru Partikel "+(i+1)+"<br>");*/
						for (var j=0; j < datakec[0].length ; j++) {  
								KecepatanBaru[i][j] = (MassaInersia[i]*datakec[i][j])+((apb[i]*r2)*(posbaru[i][j]-datapos[i][j]))+((apg[i]*r2)*(posbaru[best[best.length-1]][j]-datapos[i][j]));
									//document.write(KecepatanBaru[i][j]+" <br>");
							}
							//document.write("<br>");
							
				}
				
					
					
				/*	document.write("<br>");
					document.write("Best ="+bestfit);
					document.write("<br>");
					document.write("Worst ="+worstfit);
					document.write("<br>");
					document.write("Sum ="+sum);
					document.write("<br>");
					document.write("Mg ="+Mg);
					document.write("<br>");*/

					

					return KecepatanBaru;
			}

			function hitungPosisiBaru(datapos, datakec){
				var PosisiBaru = new Array();
				for (var i=0; i < datapos.length ; i++) { 
					//document.write("Posisi Baru Partikel "+(i+1)+"<br>");
					PosisiBaru[i] = [];
					for (var j=0; j < datapos[0].length ; j++) { 
						PosisiBaru[i][j] = datapos[i][j]+datakec[i][j];
						//document.write(PosisiBaru[i][j]+" <br>");
					}
					//document.write("<br>");
				}
				return PosisiBaru;
			}

			function updateBest(bestlama, bestbaru){
				var best = new Array();
				for (var i=0; i < bestlama.length ; i++) { 
					if (bestbaru[i]<bestlama[i]) {
						best[i] = bestbaru[i];
					}
					else{
						best[i] = bestlama[i];
					}

				} 
				var min = best[0];
				var posisi = 0;
				for (var j = 0; j < best.length-1; j++) {
					if (min>best[j]) {
						min = best[j];
						posisi = j;
					}

				}
				best[best.length-1] = posisi;
				for (var i = 0; i < bestlama.length; i++) {
					//document.write(best[i]+" ");
				}
				//document.write("<br>");
				//document.write("<br>");
				return best;
			}

			function updatePosisi(bestlama, bestbaru, poslama, posbaru){
				var best = new Array();
				for (var i=0; i < bestbaru.length-1 ; i++) {
					
					if (bestbaru[i]==bestlama[i]) {
					 	best[i] = poslama[i];
					 } 
					 else if(bestbaru[i]<bestlama[i]){
					 		best[i] = posbaru[i];
					 	}
					 	else{
					 		best[i] = poslama[i];
					 	}

				}
				for (var j=0;  j< best.length ; j++) { 
					//document.write("Posisi Update Partikel "+(j+1)+"<br>");
					for (var k=0;  k< best[0].length; k++) { 
						//document.write(best[j][k]+" <br>");
					}
					//document.write("<br>");
				}

				return best;	
			}
	</script>
</html>