<?php
      //type file yang bisa diupload
      $file_type=array('JPG','JPEG','PNG', 'jpg','jpeg','png');

      $folder='./../uploadberkas/';

      //ukuran maximum file yang dapat diupload
      $max_size=1000000; // 1MB
      if(isset($_POST['submit'])){
        //Mulai memproses data
        $date=date('Y-m-d');
        $berkass=$_POST['berkass'];
        $file_tmp=$_FILES['upload_file']['tmp_name'];
        $file_name=$_FILES['upload_file']['name'];
        $file_size=$_FILES['upload_file']['size'];
        $eror=null;
        //cari extensi file dengan menggunakan fungsi explode
        $explode	= explode('.',$file_name);
        $extensi	= $explode[count($explode)-1];

        //check apakah type file sudah sesuai
          if(!in_array($extensi,$file_type)){
            $eror="true";
           // $pesan = '- Type file yang anda upload tidak sesuai<br />';
			echo '';
          }

        //check ukuran file apakah sudah sesuai
          if($file_size > $max_size){
            $eror="true";
           // $pesan = '- Ukuran file melebihi batas maximum<br />';
						echo '<div class="alert">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Maaf!</strong> Ukuran file melebihi batas maximum.
									</div>';
          }

          if($eror=="true"){
            echo '<div class="alert">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Error!</strong> Proses upload eror.
									</div>';
          }
          else{
            //mulai memproses upload file
            if(move_uploaded_file($file_tmp, $folder.$file_name)){
              //catat nama file ke database
             $catat = mysql_query("INSERT INTO detail_berkas
                VALUES ('$berkass','$pendf','$folder.$file_name','0')");
				echo '<div class="alert alert-success">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Upload File '.$file_name.' Berhasil!</strong> Silahkan upload yang lain.
									</div>';
									echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"2;URL=berkas.php\">");
              
            }
            else{
            //echo "Proses upload eror";
			echo '<div class="alert">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Error!</strong> Proses upload eror.
									</div>';
            }
          }
      }
	  
      ?>